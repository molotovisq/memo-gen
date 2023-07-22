<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px"
    data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">

    <div id="kt_app_sidebar_wrapper" class="app-sidebar-wrapper hover-scroll-y my-5 my-lg-2" data-kt-scroll="true"
        data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
        data-kt-scroll-dependencies="#kt_app_header" data-kt-scroll-wrappers="#kt_app_sidebar_wrapper"
        data-kt-scroll-offset="5px">

        <div id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false"
            class="app-sidebar-menu-primary menu menu-column menu-rounded menu-sub-indention menu-state-bullet-primary px-6 mb-5">

            <div class="menu-item menu-accordion">

                <a href="{{ route('index') }}" class="menu-link {{ getCurrentTabActive('index')}}">
                    <span class="menu-icon">
                        <i class="fa-solid fa-house fs-3"></i>
                    </span>
                    <span class="menu-title">Painel</span>

                </a>

            </div>

            <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ getCurrentTabActive('clients', 'here show')}}">

                <span class="menu-link">
                    <span class="menu-icon">
                        <i class="fa-solid fa-user fs-3"></i>
                    </span>
                    <span class="menu-title">Clientes</span>
                    <span class="menu-arrow"></span>
                </span>
                <div class="menu-sub menu-sub-accordion">

                    <div class="menu-item">

                        <a  href="{{ route('clients.index') }}" class="menu-link {{ getCurrentTabActive('clients.index')}}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Visão Geral</span>
                        </a>

                    </div>

                    <div class="menu-item">

                        <a href="{{ route('clients.show', 1) }}" class="menu-link {{ getCurrentTabActive('clients.show') }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Ver Cliente</span>
                        </a>

                    </div>

                    <div class="menu-item">

                        <a href="{{ route('clients.create') }}" class="menu-link {{ getCurrentTabActive('clients.create') }}" >
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Adicionar Cliente</span>
                        </a>

                    </div>

                    <div class="menu-item">

                        <a  href="{{ route('clients.edit', 1) }}" class="menu-link {{ getCurrentTabActive('clients.edit') }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Editar Cliente</span>
                        </a>

                    </div>

                </div>
            </div>



        </div>

    </div>

</div>
