<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GlobalSearchController extends Controller
{
    private $models = [
        'UpdateTicket' => 'cruds.updateTicket.title',
        'CreateTicket' => 'cruds.createTicket.title',
        'CloseTicket'  => 'cruds.closeTicket.title',
    ];

    public function search(Request $request)
    {
        $search = $request->input('search');

        if ($search === null || !isset($search['term'])) {
            abort(400);
        }

        $term           = $search['term'];
        $searchableData = [];

        foreach ($this->models as $model => $translation) {
            $modelClass = 'App\\' . $model;
            $query      = $modelClass::query();

            $fields = $modelClass::$searchable;

            foreach ($fields as $field) {
                $query->orWhere($field, 'LIKE', '%' . $term . '%');
            }

            $results = $query->take(10)
                ->get();

            foreach ($results as $result) {
                $parsedData           = $result->only($fields);
                $parsedData['model']  = trans($translation);
                $parsedData['fields'] = $fields;
                $formattedFields      = [];

                foreach ($fields as $field) {
                    $formattedFields[$field] = title_case(str_replace('_', ' ', $field));
                }

                $parsedData['fields_formated'] = $formattedFields;

                $parsedData['url'] = url('/admin/' . str_plural(snake_case($model, '-')) . '/' . $result->id . '/edit');

                $searchableData[] = $parsedData;
            }
        }

        return response()->json(['results' => $searchableData]);
    }
}
