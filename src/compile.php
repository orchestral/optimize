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
        'src/ProviderRepository',
        'src/RouteGenerator',
        'src/SafeModeChecker',
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
        'src/Support/Providers/ExtensionServiceProvider',
        'src/Support/Providers/ExtensionRouteServiceProvider',
        'src/Support/Providers/RouteServiceProvider',
        'src/Support/MenuHandler',
        'src/Application',
        'src/Foundation',
        'src/Meta',
        'src/Bootstrap/LoadExpresso',
        'src/Bootstrap/LoadFoundation',
        'src/Bootstrap/LoadUserMetaData',
        'src/Bootstrap/NotifyIfSafeMode',
        'src/Bootstrap/UserAccessPolicy',
        'src/Http/Filters/Authenticate',
        'src/Http/Filters/CanBeInstalled',
        'src/Http/Filters/CanManage',
        'src/Http/Filters/IsGuest',
        'src/Http/Filters/IsInstalled',
        'src/Http/Filters/IsRegistrable',
        'src/Http/Filters/VerifyCsrfToken',
        'src/Http/Middleware/LoginAs',
        'src/Http/Middleware/UseBackendTheme',
    ],
    'orchestra/html' => [
        'src/Support/Traits/CheckerTrait',
        'src/Support/Traits/CreatorTrait',
        'src/Support/Traits/InputTrait',
        'src/Support/Traits/SelectionTrait',
        'src/Support/Traits/SessionHelperTrait',
        'src/Support/FormBuilder',
        'src/Support/HtmlBuilder',
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
        'src/Contracts/Support/DataContainer',
        'src/Contracts/Memory/Handler',
        'src/Contracts/Memory/Provider',
        'src/Contracts/Config/PackageRepository',
        'src/Contracts/Extension/Dispatcher',
        'src/Contracts/Extension/Factory',
        'src/Contracts/Extension/RouteGenerator',
        'src/Contracts/Extension/SafeMode',
        'src/Contracts/Foundation/DeferrableServiceContainer',
        'src/Contracts/Foundation/Foundation',
        'src/Contracts/Html/Factory',
        'src/Contracts/Html/Builder',
        'src/Contracts/Html/Grid',
        'src/Contracts/Html/Form/Factory',
        'src/Contracts/Html/Form/Builder',
        'src/Contracts/Html/Form/Grid',
        'src/Contracts/Html/Form/Control',
        'src/Contracts/Html/Form/Presenter',
        'src/Contracts/Html/Table/Factory',
        'src/Contracts/Html/Table/Builder',
        'src/Contracts/Html/Table/Grid',
        'src/Contracts/Http/RouteManager',
        'src/Contracts/Messages/MessageBag',
        'src/Contracts/Notification/Message',
        'src/Contracts/Notification/Notification',
        'src/Contracts/Notification/Receipt',
        'src/Contracts/Notification/Recipient',
        'src/Contracts/Theme/Theme',
        'src/Contracts/Theme/Finder',
        'src/Config/LoaderInterface',
        'src/Config/FileLoader',
        'src/Config/Traits/CascadingTrait',
        'src/Config/Traits/LoadingTrait',
        'src/Config/Repository',
        'src/Config/Bootstrap/LoadConfiguration',
        'src/Database/CacheDecorator',
        'src/Http/FormRequest',
        'src/Http/RouteManager',
        'src/Routing/Router',
        'src/Routing/ControllerDispatcher',
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
    'orchestra/resources' => [
        'src/ResourcesServiceProvider',
        'src/Router',
        'src/Dispatcher',
        'src/Factory',
        'src/Resolver',
        'src/Response',
        'src/Routing/ControllerDispatcher',
        'src/Routing/Route',
    ],
    'orchestra/support' => [
        'src/Providers/Traits/AliasesProviderTrait',
        'src/Providers/Traits/FilterProviderTrait',
        'src/Providers/Traits/MiddlewareProviderTrait',
        'src/Providers/Traits/PackageProviderTrait',
        'src/Providers/ServiceProvider',
        'src/Providers/CommandServiceProvider',
        'src/Providers/PipelineServiceProvider',
        'src/Providers/FilterServiceProvider',
        'src/Support/Contracts/CsvableInterface',
        'src/Support/Traits/DataContainerTrait',
        'src/Support/Traits/DescendibleTrait',
        'src/Support/Traits/QueryFilterTrait',
        'src/Support/Traits/ValidationTrait',
        'src/Support/Collection',
        'src/Support/Expression',
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
        'src/Handler',
        'src/Handlers/Menu',
        'src/Handlers/Pane',
        'src/Handlers/Placeholder',
    ],
];
