```
 ___      ___  _____   ____  __ __  _     ______      ___ ___   ___   ___    __ __  _        ___
|   \    /  _]|     | /    ||  |  || |   |      |    |   |   | /   \ |   \  |  |  || |      /  _]
|    \  /  [_ |   __||  o  ||  |  || |   |      |    | _   _ ||     ||    \ |  |  || |     /  [_
|  D  ||    _]|  |_  |     ||  |  || |___|_|  |_|    |  \_/  ||  O  ||  D  ||  |  || |___ |    _]
|     ||   [_ |   _] |  _  ||  :  ||     | |  |      |   |   ||     ||     ||  :  ||     ||   [_
|     ||     ||  |   |  |  ||     ||     | |  |      |   |   ||     ||     ||     ||     ||     |
|_____||_____||__|   |__|__| \__,_||_____| |__|      |___|___| \___/ |_____| \__,_||_____||_____|
```
> Default module template for [Pyro Builder Extension](https://github.com/websemantics/builder-extension)

## Features

- Scaffold stream entities,
- Automate bindings and routes,
- Generate language files,
- Generate an optional home page (dashboard),
- Include helper functions,
- Use decorators for entity tables and forms,
- Powered with [Twig](http://twig.sensiolabs.org/) templates.

## Parameters

This template will trigger the user to provide the following parameters,

- **slug**, the module identifier,
- **vendor**, the provider of the module, i.e. `anomaly`, `websemantics`,
- **description**, a description of the module,
- **docblock**, comment that can provide copyright and other information about the code.

While the following parameters are derived from user parameters with Twig filters and functions,

- **module_name** : module class name, `{{slug|studly_case}}`,
- **lower_module_name** : `{{slug|lower}}`,
- **vendor_name** : namespace for the module classes, `{{vendor|studly_case}}`,
- **lower_vendor_name** : namespace for the module classes, `{{vendor|lower}}`,
- **namespace** : streams namespace, `{{slug|lower}}`.

## Contributions

We are more than happy to accept external contributions to this template in the form of feedback, bug reports and even better - pull requests :)

For more details read [Builder documentation](https://github.com/websemantics/builder-extension).

## Support

Need help or have a question? post a questions at [StackOverflow](https://stackoverflow.com/questions/tagged/builder-extension)

*Please don't use the issue trackers for support/questions.*

## Resources

- [PyroCMS](https://github.com/pyrocms/pyrocms), an MVC PHP Content Management System built to be easy to use, theme and develop with. It is used by individuals and organizations of all sizes around the world.
- [Pyro Builder](https://github.com/websemantics/entity_builder-extension), scaffold your PyroCMS apps in style for a more pleasurable and productive coding experience.
- [Auto Pyro](https://github.com/websemantics/auto-pyro), a PyroCMS deploy tool for faster development experience.
- [Awesome PyroCMS](https://github.com/websemantics/awesome-pyrocms), a curated list of PyroCMS addons and resources.

## License

[MIT license](http://opensource.org/licenses/mit-license.php)
Copyright (c) Web Semantics, Inc.
