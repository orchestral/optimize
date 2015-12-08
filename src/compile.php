<?php

return [
    'orchestra/asset' => [
        'src/AssetServiceProvider',
        'src/Asset',
        'src/DependencyResolver',
        'src/Dispatcher',
        'src/Factory',
    ],
    'orchestra/auth' => [
        'src/Auth/AuthManager',
        'src/Auth/Guard',
        'src/Authorization/AuthorizationTrait',
        'src/Authorization/Authorization',
        'src/Authorization/Factory',
        'src/Authorization/Fluent',
        'src/Authorization/Policy',
    ],
    'orchestra/contracts' => [
        'src/Support/DataContainer',
        'src/Authorization/Authorizable',
        'src/Memory/Handler',
        'src/Memory/Provider',
        'src/Config/PackageRepository',
        'src/Extension/Dispatcher',
        'src/Extension/Factory',
        'src/Extension/RouteGenerator',
        'src/Extension/StatusChecker',
        'src/Foundation/DeferrableServiceContainer',
        'src/Foundation/Foundation',
        'src/Html/Factory',
        'src/Html/Builder',
        'src/Html/Grid',
        'src/Html/Form/Factory',
        'src/Html/Form/Builder',
        'src/Html/Form/Grid',
        'src/Html/Form/Control',
        'src/Html/Form/Presenter',
        'src/Html/Table/Factory',
        'src/Html/Table/Builder',
        'src/Html/Table/Grid',
        'src/Http/RouteManager',
        'src/Messages/MessageBag',
        'src/Notification/Message',
        'src/Notification/Notification',
        'src/Notification/Receipt',
        'src/Notification/Recipient',
        'src/Theme/Theme',
        'src/Theme/Finder',
    ],
    'orchestra/debug' => [
        'src/DebugServiceProvider',
        'src/Traits/MonologTrait',
        'src/Traits/TimerProfileTrait',
        'src/Listener',
        'src/Profiler',
    ],
    'orchestra/extension' => [
        'src/Traits/DispatchableTrait',
        'src/Traits/DomainAwareTrait',
        'src/Traits/OperationTrait',
        'src/Config/Repository',
        'src/Dispatcher',
        'src/Factory',
        'src/Plugin',
        'src/ProviderRepository',
        'src/RouteGenerator',
        'src/StatusChecker',
        'src/Bootstrap/LoadExtension',
    ],
    'orchestra/facile' => [
        'src/FacileServiceProvider',
        'src/Facile',
        'src/Factory',
        'src/Transformable',
        'src/Template/Template',
        'src/Template/Simple',
    ],
    'orchestra/foundation' => [
        'src/Providers/SupportServiceProvider',
        'src/Support/Providers/Traits/RouteProviderTrait',
        'src/Support/Providers/ModuleServiceProvider',
        'src/Support/Providers/ExtensionServiceProvider',
        'src/Support/Providers/ExtensionRouteServiceProvider',
        'src/Support/Providers/RouteServiceProvider',
        'src/Support/MenuHandler',
        'src/Listeners/UserAccess',
        'src/Application',
        'src/Foundation',
        'src/Meta',
        'src/Bootstrap/LoadExpresso',
        'src/Bootstrap/LoadFoundation',
        'src/Bootstrap/LoadUserMetaData',
        'src/Bootstrap/NotifyIfSafeMode',
        'src/Bootstrap/UserAccessPolicy',
        'src/Http/Middleware/Can',
        'src/Http/Middleware/Authenticate',
        'src/Http/Middleware/CanBeInstalled',
        'src/Http/Middleware/CanManage',
        'src/Http/Middleware/CanRegisterUser',
        'src/Http/Middleware/LoginAs',
        'src/Http/Middleware/RedirectIfAuthenticated',
        'src/Http/Middleware/RedirectIfInstalled',
        'src/Http/Middleware/UseBackendTheme',
        'src/Http/Middleware/RequireCsrfToken',
        'src/Http/Middleware/VerifyCsrfToken',
    ],
    'orchestra/html' => [
        'src/HtmlBuilder',
        'src/FormBuilder',
        'src/Builder',
        'src/Factory',
        'src/Grid',
        'src/Form/Control',
        'src/Form/Factory',
        'src/Form/Field',
        'src/Form/Fieldset',
        'src/Form/FormBuilder',
        'src/Form/Grid',
        'src/Table/Column',
        'src/Table/Factory',
        'src/Table/Grid',
        'src/Table/TableBuilder',
    ],
    'orchestra/kernel' => [
        'src/Config/LoaderInterface',
        'src/Config/FileLoader',
        'src/Config/Traits/CascadingTrait',
        'src/Config/Traits/LoadingTrait',
        'src/Config/Repository',
        'src/Config/Bootstrap/LoadConfiguration',
        'src/Database/CacheDecorator',
        'src/Http/Traits/PassThroughTrait',
        'src/Http/FormRequest',
        'src/Http/RouteManager',
        'src/Routing/Router',
        'src/Routing/Controller',
        'src/Routing/Traits/ControllerResponseTrait',
    ],
    'orchestra/memory' => [
        'src/MemoryManager',
        'src/Provider',
        'src/ContainerTrait',
        'src/Handler',
        'src/Handlers/Cache',
        'src/Handlers/Eloquent',
        'src/Handlers/Fluent',
        'src/Handlers/Runtime',
    ],
    'orchestra/model' => [
        'src/Observer/Role',
        'src/Memory/UserMetaProvider',
        'src/Memory/UserMetaRepository',
    ],
    'orchestra/messages' => [
        'src/MessagesServiceProvider',
        'src/MessageBag',
    ],
    'orchestra/notifier' => [
        'src/NotifierServiceProvider',
        'src/NotifiableTrait',
        'src/Receipt',
    ],
    'orchestra/support' => [
        'src/Providers/Traits/AliasesProviderTrait',
        'src/Providers/Traits/EventProviderTrait',
        'src/Providers/Traits/FilterProviderTrait',
        'src/Providers/Traits/MiddlewareProviderTrait',
        'src/Providers/Traits/PackageProviderTrait',
        'src/Providers/ServiceProvider',
        'src/Providers/CommandServiceProvider',
        'src/Providers/EventServiceProvider',
        'src/Providers/MiddlewareServiceProvider',
        'src/Providers/FilterServiceProvider',
        'src/Support/Contracts/CsvableInterface',
        'src/Support/Traits/DataContainerTrait',
        'src/Support/Traits/DescendibleTrait',
        'src/Support/Traits/QueryFilterTrait',
        'src/Support/Traits/ValidationTrait',
        'src/Support/Collection',
        'src/Support/Expression',
        'src/Support/Keyword',
        'src/Support/Manager',
        'src/Support/Nesty',
        'src/Support/Str',
        'src/Support/Validator',
        'src/Facades/ACL',
        'src/Facades/Asset',
        'src/Facades/Config',
        'src/Facades/Decorator',
        'src/Facades/Facile',
        'src/Facades/Form',
        'src/Facades/Foundation',
        'src/Facades/HTML',
        'src/Facades/Mail',
        'src/Facades/Memory',
        'src/Facades/Messages',
        'src/Facades/Meta',
        'src/Facades/Profiler',
        'src/Facades/Publisher',
        'src/Facades/Resources',
        'src/Facades/Table',
        'src/Facades/Theme',
        'src/Facades/Widget',
    ],
    'orchestra/translation' => [
        'src/TranslationServiceProvider',
        'src/FileLoader',
    ],
    'orchestra/view' => [
        'src/ViewServiceProvider',
        'src/DecoratorServiceProvider',
        'src/Decorator',
        'src/FileViewFinder',
        'src/Theme/Theme',
        'src/Theme/Finder',
        'src/Theme/Manifest',
        'src/Theme/ThemeManager',
        'src/Bootstrap/LoadCurrentTheme',
    ],
    'orchestra/widget' => [
        'src/WidgetManager',
        'src/Fluent/Menu',
        'src/Handler',
        'src/Handlers/Menu',
        'src/Handlers/Pane',
        'src/Handlers/Placeholder',
    ],
];
