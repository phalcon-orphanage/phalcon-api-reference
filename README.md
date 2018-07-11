# DEPRECATED

Please note that this repository has been marked as deprecated. We will be deleting it from our organization at 31 August 2018.

We want to be able to offer our community with quality work, and we cannot simply maintain all the available repositories. If you feel that this repository should be kept you can talk to us in our discord server (https://phalcon.link/discord). You can also fork the repository if you wish to and/or archive it for your purposes.

For more see: https://blog.phalconphp.com/post/repository-reorganization

Phalcon PHP API reference application
=====================================

This application was developed using the Phalcon.

Backend part is console app which parse the Phalcon C-sources to generate API docs.

[Demo](http://phalcon.agent-j.ru/)

###Restrictions
- generator uses PHP ReflectionClass, so its possible to generate API only for currently installed Phalcon version
- there are no default values for methods arguments
- there are no properties descriptions 'cause they are absent in the sources

###Roadmap
- ~~host the sources on GitHub~~ **done**
- improve the parser to get rid of ReflectionClass
- some more improve parser to get default values for methods arguments
- multilingual support
- search for methods and properties 


###CLI usage

```bash
> cd /path/to/app
> php console.php genapi
```
or with params
```bash
> php console.php genapi -g -o -b master -u your-login:your-pass
```

####Available CLI options
```
--help        -h   Help
--github      -g   Should use GitHub, otherwise use filesystem directory
--branch      -b   GitHub branch. It will use current Phalcon version if not set
--user        -u   GitHub user name or e-mail and password <user>:<pass>
--overwrite   -o   Should be set to overwrite existing data
--dir         -d   Path to filesystem directory or GitHub path to source files. This option overrides config value
```
