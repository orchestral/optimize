<?php

return array(
    "asset" => array(
        "Orchestra/Asset/AssetServiceProvider",
        "Orchestra/Asset/Container",
        "Orchestra/Asset/DependencyResolver",
        "Orchestra/Asset/Dispatcher",
        "Orchestra/Asset/Environment",
    ),
    "auth" => array(
        "Orchestra/Auth/AuthManager",
        "Orchestra/Auth/Guard",
        "Orchestra/Auth/Acl/Container",
        "Orchestra/Auth/Acl/Environment",
        "Orchestra/Auth/Acl/Fluent",
    ),
    "debug" => array(
        "Orchestra/Debug/DebugServiceProvider",
        "Orchestra/Debug/Profiler",
        "Orchestra/Debug/Facades/Profiler",
    ),
    "extension" => array(
        "Orchestra/Extension/ConfigManager",
        "Orchestra/Extension/Debugger",
        "Orchestra/Extension/Dispatcher",
        "Orchestra/Extension/Environment",
        "Orchestra/Extension/ProviderRepository",
        "Orchestra/Extension/RouteGenerator",
        "Orchestra/Extension/Contracts/DebuggerInterface",
        "Orchestra/Extension/Contracts/DispatcherInterface",
    ),
    "facile" => array(
        "Orchestra/Facile/FacileServiceProvider",
        "Orchestra/Facile/Environment",
        "Orchestra/Facile/Response",
        "Orchestra/Facile/Transformable",
        "Orchestra/Facile/Template/Driver",
        "Orchestra/Facile/Template/Base",
    ),
    "foundation" => array(
        "Orchestra/Foundation/SiteServiceProvider",
        "Orchestra/Foundation/Abstractable/RouteManager",
        "Orchestra/Foundation/Application",
        "Orchestra/Foundation/Mail",
        "Orchestra/Foundation/Site",
        "Orchestra/Foundation/UserMetaRepository",
    ),
    "html" => array(
        "Orchestra/Html/HtmlBuilder",
        "Orchestra/Html/Abstractable/Builder",
        "Orchestra/Html/Abstractable/Environment",
        "Orchestra/Html/Abstractable/Grid",
        "Orchestra/Html/Form/Control",
        "Orchestra/Html/Form/Environment",
        "Orchestra/Html/Form/Fieldset",
        "Orchestra/Html/Form/FormBuilder",
        "Orchestra/Html/Form/Grid",
        "Orchestra/Html/Table/Environment",
        "Orchestra/Html/Table/Grid",
        "Orchestra/Html/Table/TableBuilder",
    ),
    "memory" => array(
        "Orchestra/Memory/MemoryManager",
        "Orchestra/Memory/Abstractable/Container",
        "Orchestra/Memory/Drivers/Driver",
        "Orchestra/Memory/Drivers/Cache",
        "Orchestra/Memory/Drivers/Eloquent",
        "Orchestra/Memory/Drivers/Fluent",
        "Orchestra/Memory/Drivers/Runtime",
    ),
    "model" => array(
        "Orchestra/Model/Role",
        "Orchestra/Model/User",
        "Orchestra/Model/UserMeta",
        "Orchestra/Model/Observer/Role",
    ),
    "resources" => array(
        "Orchestra/Resources/ResourcesServiceProvider",
        "Orchestra/Resources/Container",
        "Orchestra/Resources/Dispatcher",
        "Orchestra/Resources/Environment",
        "Orchestra/Resources/Response",
        "Orchestra/Resources/Routing/ControllerDispatcher",
        "Orchestra/Resources/Routing/Route",
    ),
    "support" => array(
        "Orchestra/Support/MessagesServiceProvider",
        "Orchestra/Support/Expression",
        "Orchestra/Support/Manager",
        "Orchestra/Support/Messages",
        "Orchestra/Support/Nesty",
        "Orchestra/Support/Relic",
        "Orchestra/Support/Str",
        "Orchestra/Support/Validator",
        "Orchestra/Support/Facades/Acl",
        "Orchestra/Support/Facades/App",
        "Orchestra/Support/Facades/Asset",
        "Orchestra/Support/Facades/Config",
        "Orchestra/Support/Facades/Decorator",
        "Orchestra/Support/Facades/Facile",
        "Orchestra/Support/Facades/Form",
        "Orchestra/Support/Facades/Mail",
        "Orchestra/Support/Facades/Memory",
        "Orchestra/Support/Facades/Messages",
        "Orchestra/Support/Facades/Publisher",
        "Orchestra/Support/Facades/Resources",
        "Orchestra/Support/Facades/Site",
        "Orchestra/Support/Facades/Table",
        "Orchestra/Support/Facades/Theme",
        "Orchestra/Support/Facades/Widget",
    ),
    "view" => array(
        "Orchestra/View/ViewServiceProvider",
        "Orchestra/View/DecoratorServiceProvider",
        "Orchestra/View/Decorator",
        "Orchestra/View/FileViewFinder",
        "Orchestra/View/Theme/Container",
        "Orchestra/View/Theme/Finder",
        "Orchestra/View/Theme/Manifest",
        "Orchestra/View/Theme/ThemeManager",
    ),
    "widget" => array(
        "Orchestra/Widget/WidgetManager",
        "Orchestra/Widget/Drivers/Driver",
        "Orchestra/Widget/Drivers/Menu",
        "Orchestra/Widget/Drivers/Pane",
        "Orchestra/Widget/Drivers/Placeholder",
    ),
);
