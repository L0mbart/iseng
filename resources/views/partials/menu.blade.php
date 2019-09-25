<aside class="main-sidebar sidebar-dark-primary elevation-4" style="min-height: 917px;">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">{{ trans('panel.site_title') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li>
                    <select class="searchable-field form-control">

                    </select>
                </li>
                <li class="nav-item">
                    <a href="{{ route("admin.home") }}" class="nav-link">
                        <p>
                            <i class="fas fa-fw fa-tachometer-alt">

                            </i>
                            <span>{{ trans('global.dashboard') }}</span>
                        </p>
                    </a>
                </li>
                @can('user_management_access')
                    <li class="nav-item has-treeview {{ request()->is('admin/permissions*') ? 'menu-open' : '' }} {{ request()->is('admin/roles*') ? 'menu-open' : '' }} {{ request()->is('admin/users*') ? 'menu-open' : '' }} {{ request()->is('admin/audit-logs*') ? 'menu-open' : '' }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw fas fa-users">

                            </i>
                            <p>
                                <span>{{ trans('cruds.userManagement.title') }}</span>
                                <i class="right fa fa-fw fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('permission_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-unlock-alt">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.permission.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('role_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-briefcase">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.role.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('user_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-user">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.user.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('audit_log_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.audit-logs.index") }}" class="nav-link {{ request()->is('admin/audit-logs') || request()->is('admin/audit-logs/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-file-alt">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.auditLog.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('ticketing_access')
                    <li class="nav-item has-treeview {{ request()->is('admin/update-tickets*') ? 'menu-open' : '' }} {{ request()->is('admin/create-tickets*') ? 'menu-open' : '' }} {{ request()->is('admin/close-tickets*') ? 'menu-open' : '' }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw fas fa-exclamation-circle">

                            </i>
                            <p>
                                <span>{{ trans('cruds.ticketing.title') }}</span>
                                <i class="right fa fa-fw fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('update_ticket_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.update-tickets.index") }}" class="nav-link {{ request()->is('admin/update-tickets') || request()->is('admin/update-tickets/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-arrow-up">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.updateTicket.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('create_ticket_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.create-tickets.index") }}" class="nav-link {{ request()->is('admin/create-tickets') || request()->is('admin/create-tickets/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-plus">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.createTicket.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('close_ticket_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.close-tickets.index") }}" class="nav-link {{ request()->is('admin/close-tickets') || request()->is('admin/close-tickets/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-stop-circle">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.closeTicket.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('task_management_access')
                    <li class="nav-item has-treeview {{ request()->is('admin/task-statuses*') ? 'menu-open' : '' }} {{ request()->is('admin/task-tags*') ? 'menu-open' : '' }} {{ request()->is('admin/tasks*') ? 'menu-open' : '' }} {{ request()->is('admin/tasks-calendars*') ? 'menu-open' : '' }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw fas fa-list">

                            </i>
                            <p>
                                <span>{{ trans('cruds.taskManagement.title') }}</span>
                                <i class="right fa fa-fw fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('task_status_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.task-statuses.index") }}" class="nav-link {{ request()->is('admin/task-statuses') || request()->is('admin/task-statuses/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-server">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.taskStatus.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('task_tag_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.task-tags.index") }}" class="nav-link {{ request()->is('admin/task-tags') || request()->is('admin/task-tags/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-server">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.taskTag.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('task_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.tasks.index") }}" class="nav-link {{ request()->is('admin/tasks') || request()->is('admin/tasks/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-briefcase">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.task.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('tasks_calendar_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.tasks-calendars.index") }}" class="nav-link {{ request()->is('admin/tasks-calendars') || request()->is('admin/tasks-calendars/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-calendar">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.tasksCalendar.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('user_alert_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.user-alerts.index") }}" class="nav-link {{ request()->is('admin/user-alerts') || request()->is('admin/user-alerts/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fa-bell">

                            </i>
                            <p>
                                <span>{{ trans('cruds.userAlert.title') }}</span>
                            </p>
                        </a>
                    </li>
                @endcan
                @can('time_management_access')
                    <li class="nav-item has-treeview {{ request()->is('admin/time-work-types*') ? 'menu-open' : '' }} {{ request()->is('admin/time-projects*') ? 'menu-open' : '' }} {{ request()->is('admin/time-entries*') ? 'menu-open' : '' }} {{ request()->is('admin/time-reports*') ? 'menu-open' : '' }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw fas fa-clock">

                            </i>
                            <p>
                                <span>{{ trans('cruds.timeManagement.title') }}</span>
                                <i class="right fa fa-fw fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('time_work_type_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.time-work-types.index") }}" class="nav-link {{ request()->is('admin/time-work-types') || request()->is('admin/time-work-types/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-th">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.timeWorkType.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('time_project_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.time-projects.index") }}" class="nav-link {{ request()->is('admin/time-projects') || request()->is('admin/time-projects/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-briefcase">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.timeProject.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('time_entry_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.time-entries.index") }}" class="nav-link {{ request()->is('admin/time-entries') || request()->is('admin/time-entries/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-briefcase">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.timeEntry.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('time_report_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.time-reports.index") }}" class="nav-link {{ request()->is('admin/time-reports') || request()->is('admin/time-reports/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-chart-line">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.timeReport.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('faq_management_access')
                    <li class="nav-item has-treeview {{ request()->is('admin/faq-categories*') ? 'menu-open' : '' }} {{ request()->is('admin/faq-questions*') ? 'menu-open' : '' }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw fas fa-question">

                            </i>
                            <p>
                                <span>{{ trans('cruds.faqManagement.title') }}</span>
                                <i class="right fa fa-fw fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('faq_category_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.faq-categories.index") }}" class="nav-link {{ request()->is('admin/faq-categories') || request()->is('admin/faq-categories/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-briefcase">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.faqCategory.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('faq_question_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.faq-questions.index") }}" class="nav-link {{ request()->is('admin/faq-questions') || request()->is('admin/faq-questions/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-question">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.faqQuestion.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('contact_management_access')
                    <li class="nav-item has-treeview {{ request()->is('admin/contact-companies*') ? 'menu-open' : '' }} {{ request()->is('admin/contact-contacts*') ? 'menu-open' : '' }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw fas fa-phone-square">

                            </i>
                            <p>
                                <span>{{ trans('cruds.contactManagement.title') }}</span>
                                <i class="right fa fa-fw fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('contact_company_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.contact-companies.index") }}" class="nav-link {{ request()->is('admin/contact-companies') || request()->is('admin/contact-companies/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-building">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.contactCompany.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('contact_contact_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.contact-contacts.index") }}" class="nav-link {{ request()->is('admin/contact-contacts') || request()->is('admin/contact-contacts/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-user-plus">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.contactContact.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('basic_c_r_m_access')
                    <li class="nav-item has-treeview {{ request()->is('admin/crm-statuses*') ? 'menu-open' : '' }} {{ request()->is('admin/crm-customers*') ? 'menu-open' : '' }} {{ request()->is('admin/crm-notes*') ? 'menu-open' : '' }} {{ request()->is('admin/crm-documents*') ? 'menu-open' : '' }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw fas fa-briefcase">

                            </i>
                            <p>
                                <span>{{ trans('cruds.basicCRM.title') }}</span>
                                <i class="right fa fa-fw fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('crm_status_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.crm-statuses.index") }}" class="nav-link {{ request()->is('admin/crm-statuses') || request()->is('admin/crm-statuses/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-folder">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.crmStatus.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('crm_customer_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.crm-customers.index") }}" class="nav-link {{ request()->is('admin/crm-customers') || request()->is('admin/crm-customers/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-user-plus">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.crmCustomer.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('crm_note_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.crm-notes.index") }}" class="nav-link {{ request()->is('admin/crm-notes') || request()->is('admin/crm-notes/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-sticky-note">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.crmNote.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('crm_document_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.crm-documents.index") }}" class="nav-link {{ request()->is('admin/crm-documents') || request()->is('admin/crm-documents/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-folder">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.crmDocument.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('expense_management_access')
                    <li class="nav-item has-treeview {{ request()->is('admin/expense-categories*') ? 'menu-open' : '' }} {{ request()->is('admin/income-categories*') ? 'menu-open' : '' }} {{ request()->is('admin/expenses*') ? 'menu-open' : '' }} {{ request()->is('admin/incomes*') ? 'menu-open' : '' }} {{ request()->is('admin/expense-reports*') ? 'menu-open' : '' }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw fas fa-money-bill">

                            </i>
                            <p>
                                <span>{{ trans('cruds.expenseManagement.title') }}</span>
                                <i class="right fa fa-fw fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('expense_category_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.expense-categories.index") }}" class="nav-link {{ request()->is('admin/expense-categories') || request()->is('admin/expense-categories/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-list">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.expenseCategory.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('income_category_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.income-categories.index") }}" class="nav-link {{ request()->is('admin/income-categories') || request()->is('admin/income-categories/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-list">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.incomeCategory.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('expense_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.expenses.index") }}" class="nav-link {{ request()->is('admin/expenses') || request()->is('admin/expenses/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-arrow-circle-right">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.expense.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('income_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.incomes.index") }}" class="nav-link {{ request()->is('admin/incomes') || request()->is('admin/incomes/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-arrow-circle-right">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.income.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('expense_report_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.expense-reports.index") }}" class="nav-link {{ request()->is('admin/expense-reports') || request()->is('admin/expense-reports/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-chart-line">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.expenseReport.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('product_management_access')
                    <li class="nav-item has-treeview {{ request()->is('admin/product-categories*') ? 'menu-open' : '' }} {{ request()->is('admin/product-tags*') ? 'menu-open' : '' }} {{ request()->is('admin/products*') ? 'menu-open' : '' }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw fas fa-shopping-cart">

                            </i>
                            <p>
                                <span>{{ trans('cruds.productManagement.title') }}</span>
                                <i class="right fa fa-fw fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('product_category_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.product-categories.index") }}" class="nav-link {{ request()->is('admin/product-categories') || request()->is('admin/product-categories/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-folder">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.productCategory.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('product_tag_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.product-tags.index") }}" class="nav-link {{ request()->is('admin/product-tags') || request()->is('admin/product-tags/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-folder">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.productTag.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('product_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.products.index") }}" class="nav-link {{ request()->is('admin/products') || request()->is('admin/products/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-shopping-cart">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.product.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('client_management_setting_access')
                    <li class="nav-item has-treeview {{ request()->is('admin/currencies*') ? 'menu-open' : '' }} {{ request()->is('admin/transaction-types*') ? 'menu-open' : '' }} {{ request()->is('admin/income-sources*') ? 'menu-open' : '' }} {{ request()->is('admin/client-statuses*') ? 'menu-open' : '' }} {{ request()->is('admin/project-statuses*') ? 'menu-open' : '' }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw fas fa-cog">

                            </i>
                            <p>
                                <span>{{ trans('cruds.clientManagementSetting.title') }}</span>
                                <i class="right fa fa-fw fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('currency_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.currencies.index") }}" class="nav-link {{ request()->is('admin/currencies') || request()->is('admin/currencies/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-money-bill">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.currency.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('transaction_type_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.transaction-types.index") }}" class="nav-link {{ request()->is('admin/transaction-types') || request()->is('admin/transaction-types/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-money-check">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.transactionType.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('income_source_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.income-sources.index") }}" class="nav-link {{ request()->is('admin/income-sources') || request()->is('admin/income-sources/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-database">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.incomeSource.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('client_status_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.client-statuses.index") }}" class="nav-link {{ request()->is('admin/client-statuses') || request()->is('admin/client-statuses/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-server">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.clientStatus.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('project_status_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.project-statuses.index") }}" class="nav-link {{ request()->is('admin/project-statuses') || request()->is('admin/project-statuses/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-server">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.projectStatus.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('client_management_access')
                    <li class="nav-item has-treeview {{ request()->is('admin/clients*') ? 'menu-open' : '' }} {{ request()->is('admin/projects*') ? 'menu-open' : '' }} {{ request()->is('admin/notes*') ? 'menu-open' : '' }} {{ request()->is('admin/documents*') ? 'menu-open' : '' }} {{ request()->is('admin/transactions*') ? 'menu-open' : '' }} {{ request()->is('admin/client-reports*') ? 'menu-open' : '' }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw fas fa-briefcase">

                            </i>
                            <p>
                                <span>{{ trans('cruds.clientManagement.title') }}</span>
                                <i class="right fa fa-fw fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('client_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.clients.index") }}" class="nav-link {{ request()->is('admin/clients') || request()->is('admin/clients/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-user-plus">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.client.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('project_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.projects.index") }}" class="nav-link {{ request()->is('admin/projects') || request()->is('admin/projects/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-briefcase">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.project.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('note_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.notes.index") }}" class="nav-link {{ request()->is('admin/notes') || request()->is('admin/notes/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-sticky-note">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.note.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('document_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.documents.index") }}" class="nav-link {{ request()->is('admin/documents') || request()->is('admin/documents/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-file-alt">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.document.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('transaction_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.transactions.index") }}" class="nav-link {{ request()->is('admin/transactions') || request()->is('admin/transactions/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-credit-card">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.transaction.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('client_report_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.client-reports.index") }}" class="nav-link {{ request()->is('admin/client-reports') || request()->is('admin/client-reports/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-chart-line">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.clientReport.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('content_management_access')
                    <li class="nav-item has-treeview {{ request()->is('admin/content-categories*') ? 'menu-open' : '' }} {{ request()->is('admin/content-tags*') ? 'menu-open' : '' }} {{ request()->is('admin/content-pages*') ? 'menu-open' : '' }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw fas fa-book">

                            </i>
                            <p>
                                <span>{{ trans('cruds.contentManagement.title') }}</span>
                                <i class="right fa fa-fw fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('content_category_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.content-categories.index") }}" class="nav-link {{ request()->is('admin/content-categories') || request()->is('admin/content-categories/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-folder">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.contentCategory.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('content_tag_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.content-tags.index") }}" class="nav-link {{ request()->is('admin/content-tags') || request()->is('admin/content-tags/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-tags">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.contentTag.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('content_page_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.content-pages.index") }}" class="nav-link {{ request()->is('admin/content-pages') || request()->is('admin/content-pages/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-file">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.contentPage.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                <li class="nav-item">
                    <a href="{{ route("admin.systemCalendar") }}" class="nav-link {{ request()->is('admin/system-calendar') || request()->is('admin/system-calendar/*') ? 'active' : '' }}">
                        <i class="fas fa-fw fa-calendar">

                        </i>
                        <p>
                            <span>{{ trans('global.systemCalendar') }}</span>
                        </p>
                    </a>
                </li>
                @php($unread = \App\QaTopic::unreadCount())
                    <li class="nav-item">
                        <a href="{{ route("admin.messenger.index") }}" class="{{ request()->is('admin/messenger') || request()->is('admin/messenger/*') ? 'active' : '' }} nav-link">
                            <i class="fa-fw fa fa-envelope">

                            </i>
                            <span>{{ trans('global.messages') }}</span>
                            @if($unread > 0)
                                <strong>( {{ $unread }} )</strong>
                            @endif
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                            <p>
                                <i class="fas fa-fw fa-sign-out-alt">

                                </i>
                                <span>{{ trans('global.logout') }}</span>
                            </p>
                        </a>
                    </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>