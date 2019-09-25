<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:api']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Taskstatuses
    Route::apiResource('task-statuses', 'TaskStatusApiController');

    // Tasktags
    Route::apiResource('task-tags', 'TaskTagApiController');

    // Tasks
    Route::post('tasks/media', 'TaskApiController@storeMedia')->name('tasks.storeMedia');
    Route::apiResource('tasks', 'TaskApiController');

    // Taskscalendars
    Route::apiResource('tasks-calendars', 'TasksCalendarApiController', ['except' => ['store', 'show', 'update', 'destroy']]);

    // Timeworktypes
    Route::apiResource('time-work-types', 'TimeWorkTypeApiController');

    // Timeprojects
    Route::apiResource('time-projects', 'TimeProjectApiController');

    // Timeentries
    Route::apiResource('time-entries', 'TimeEntryApiController');

    // Timereports
    Route::apiResource('time-reports', 'TimeReportApiController');

    // Faqcategories
    Route::apiResource('faq-categories', 'FaqCategoryApiController');

    // Faqquestions
    Route::apiResource('faq-questions', 'FaqQuestionApiController');

    // Contactcompanies
    Route::apiResource('contact-companies', 'ContactCompanyApiController');

    // Contactcontacts
    Route::apiResource('contact-contacts', 'ContactContactsApiController');

    // Crmstatuses
    Route::apiResource('crm-statuses', 'CrmStatusApiController');

    // Crmcustomers
    Route::apiResource('crm-customers', 'CrmCustomerApiController');

    // Crmnotes
    Route::apiResource('crm-notes', 'CrmNoteApiController');

    // Crmdocuments
    Route::post('crm-documents/media', 'CrmDocumentApiController@storeMedia')->name('crm-documents.storeMedia');
    Route::apiResource('crm-documents', 'CrmDocumentApiController');

    // Expensecategories
    Route::apiResource('expense-categories', 'ExpenseCategoryApiController');

    // Incomecategories
    Route::apiResource('income-categories', 'IncomeCategoryApiController');

    // Expenses
    Route::apiResource('expenses', 'ExpenseApiController');

    // Incomes
    Route::apiResource('incomes', 'IncomeApiController');

    // Expensereports
    Route::apiResource('expense-reports', 'ExpenseReportApiController');

    // Productcategories
    Route::post('product-categories/media', 'ProductCategoryApiController@storeMedia')->name('product-categories.storeMedia');
    Route::apiResource('product-categories', 'ProductCategoryApiController');

    // Producttags
    Route::apiResource('product-tags', 'ProductTagApiController');

    // Products
    Route::post('products/media', 'ProductApiController@storeMedia')->name('products.storeMedia');
    Route::apiResource('products', 'ProductApiController');

    // Currencies
    Route::apiResource('currencies', 'CurrencyApiController');

    // Transactiontypes
    Route::apiResource('transaction-types', 'TransactionTypeApiController');

    // Incomesources
    Route::apiResource('income-sources', 'IncomeSourceApiController');

    // Clientstatuses
    Route::apiResource('client-statuses', 'ClientStatusApiController');

    // Projectstatuses
    Route::apiResource('project-statuses', 'ProjectStatusApiController');

    // Clients
    Route::apiResource('clients', 'ClientApiController');

    // Projects
    Route::apiResource('projects', 'ProjectApiController');

    // Notes
    Route::apiResource('notes', 'NoteApiController');

    // Documents
    Route::post('documents/media', 'DocumentApiController@storeMedia')->name('documents.storeMedia');
    Route::apiResource('documents', 'DocumentApiController');

    // Transactions
    Route::apiResource('transactions', 'TransactionApiController');

    // Clientreports
    Route::apiResource('client-reports', 'ClientReportApiController');

    // Contentcategories
    Route::apiResource('content-categories', 'ContentCategoryApiController');

    // Contenttags
    Route::apiResource('content-tags', 'ContentTagApiController');

    // Contentpages
    Route::post('content-pages/media', 'ContentPageApiController@storeMedia')->name('content-pages.storeMedia');
    Route::apiResource('content-pages', 'ContentPageApiController');

    // Updatetickets
    Route::apiResource('update-tickets', 'UpdateTicketApiController');

    // Createtickets
    Route::apiResource('create-tickets', 'CreateTicketApiController');

    // Closetickets
    Route::apiResource('close-tickets', 'CloseTicketApiController');
});
