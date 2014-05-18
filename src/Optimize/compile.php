<?php

return array(
    "asset" => array(
        "Asset/AssetServiceProvider",
        "Asset/Container",
        "Asset/DependencyResolver",
        "Asset/Dispatcher",
        "Asset/Factory",
    ),
    "auth" => array(
        "Auth/AuthManager",
        "Auth/Guard",
        "Auth/Acl/Container",
        "Auth/Acl/Factory",
        "Auth/Acl/Fluent",
    ),
    "debug" => array(
        "Debug/DebugServiceProvider",
        "Debug/Profiler",
    ),
    "extension" => array(
        "Extension/Contracts/DebuggerInterface",
        "Extension/Contracts/DispatcherInterface",
        "Extension/Traits/OperationTrait",
        "Extension/ConfigManager",
        "Extension/Debugger",
        "Extension/Dispatcher",
        "Extension/Factory",
        "Extension/ProviderRepository",
        "Extension/RouteGenerator",
    ),
    "facile" => array(
        "Facile/FacileServiceProvider",
        "Facile/Container",
        "Facile/Factory",
        "Facile/Transformable",
        "Facile/Template/Driver",
        "Facile/Template/Base",
    ),
    "foundation" => array(
        "Foundation/SiteServiceProvider",
        "Foundation/Abstractable/RouteManager",
        "Foundation/Application",
        "Foundation/Site",
    ),
    "html" => array(
        "Html/HtmlBuilder",
        "Html/Abstractable/Builder",
        "Html/Abstractable/Factory",
        "Html/Abstractable/Grid",
        "Html/Form/Control",
        "Html/Form/Factory",
        "Html/Form/Field",
        "Html/Form/Fieldset",
        "Html/Form/FormBuilder",
        "Html/Form/Grid",
        "Html/Table/Column",
        "Html/Table/Factory",
        "Html/Table/Grid",
        "Html/Table/TableBuilder",
    ),
    "memory" => array(
        "Memory/MemoryManager",
        "Memory/Provider",
        "Memory/ContainerTrait",
        "Memory/Abstractable/Container",
        "Memory/Abstractable/Handler",
        "Memory/MemoryHandlerInterface",
        "Memory/CacheMemoryHandler",
        "Memory/EloquentMemoryHandler",
        "Memory/FluentMemoryHandler",
        "Memory/RuntimeMemoryHandler",
    ),
    "model" => array(
        "Model/Observer/Role",
        "Model/Memory/UserMetaProvider",
        "Model/Memory/UserMetaRepository",
    ),
    "notifier" => array(
        "Notifier/NotifierServiceProvider",
        "Notifier/NotifierInterface",
        "Notifier/RecipientInterface",
        "Notifier/NotifiableTrait",
    ),
    "resources" => array(
        "Resources/ResourcesServiceProvider",
        "Resources/Container",
        "Resources/Dispatcher",
        "Resources/Factory",
        "Resources/Response",
        "Resources/Routing/ControllerDispatcher",
        "Resources/Routing/Route",
    ),
    "support" => array(
        "Support/MessagesServiceProvider",
        "Support/Contracts/CsvableInterface",
        "Support/Traits/ControllerResponseTrait",
        "Support/Traits/DescendibleTrait",
        "Support/Traits/QueryFilterTrait",
        "Support/Collection",
        "Support/Expression",
        "Support/Manager",
        "Support/Messages",
        "Support/Nesty",
        "Support/Relic",
        "Support/Str",
        "Support/Validator",
        "Support/Facades/Acl",
        "Support/Facades/App",
        "Support/Facades/Asset",
        "Support/Facades/Config",
        "Support/Facades/Decorator",
        "Support/Facades/Facile",
        "Support/Facades/Form",
        "Support/Facades/Mail",
        "Support/Facades/Memory",
        "Support/Facades/Messages",
        "Support/Facades/Profiler",
        "Support/Facades/Publisher",
        "Support/Facades/Resources",
        "Support/Facades/Site",
        "Support/Facades/Table",
        "Support/Facades/Theme",
        "Support/Facades/Widget",
    ),
    "translation" => array(
        "Translation/TranslationServiceProvider",
        "Translation/FileLoader",
    ),
    "view" => array(
        "View/ViewServiceProvider",
        "View/DecoratorServiceProvider",
        "View/Decorator",
        "View/FileViewFinder",
        "View/Theme/Container",
        "View/Theme/Finder",
        "View/Theme/Manifest",
        "View/Theme/ThemeManager",
    ),
    "widget" => array(
        "Widget/WidgetManager",
        "Widget/Factory",
        "Widget/MenuWidgetHandler",
        "Widget/PaneWidgetHandler",
        "Widget/PlaceholderWidgetHandler",
    ),
);
