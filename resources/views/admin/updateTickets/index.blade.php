@extends('layouts.admin')
@section('content')
@can('update_ticket_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.update-tickets.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.updateTicket.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.updateTicket.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-UpdateTicket">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.updateTicket.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.updateTicket.fields.update_ticket') }}
                        </th>
                        <th>
                            {{ trans('cruds.updateTicket.fields.nomor_ticket') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($updateTickets as $key => $updateTicket)
                        <tr data-entry-id="{{ $updateTicket->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $updateTicket->id ?? '' }}
                            </td>
                            <td>
                                {{ $updateTicket->update_ticket ?? '' }}
                            </td>
                            <td>
                                {{ $updateTicket->nomor_ticket ?? '' }}
                            </td>
                            <td>
                                @can('update_ticket_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.update-tickets.show', $updateTicket->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('update_ticket_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.update-tickets.edit', $updateTicket->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('update_ticket_delete')
                                    <form action="{{ route('admin.update-tickets.destroy', $updateTicket->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('update_ticket_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.update-tickets.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  $('.datatable-UpdateTicket:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection