TESTING
-------

Tests befinden sich `tests` Ordner. Sie werden mittels [Codeception](http://codeception.com/) erstellt und 
es gibt 3 verscheiden Testarten:

- `unit`
- `functional`
- `acceptance`

Alle Testst werden mit dem folgenden Befehl ausgeführt:

```
vendor/bin/codecept run
```

### Code coverage support

By default, code coverage is disabled in `codeception.yml` configuration file, you should uncomment needed rows to be able
to collect code coverage. You can run your tests and collect coverage with the following command:

```
#collect coverage for all tests
vendor/bin/codecept run -- --coverage-html --coverage-xml

#collect coverage only for unit tests
vendor/bin/codecept run unit -- --coverage-html --coverage-xml

#collect coverage for unit and functional tests
vendor/bin/codecept run functional,unit -- --coverage-html --coverage-xml
```

You can see code coverage output under the `tests/_output` directory.