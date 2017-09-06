Install guide:
---

- ``` git clone https://github.com/makcumka2000/biflorica-codeception-example ```

- ``` composer update ```


For run tests:
--

```
vendor\bin\codecept run
```

Before run tests you need run your selenium server:
```
java -jar selenium-server-standalone-3.5.3.jar
```

For properly work selenium you must put drivers for browser in dir with selenium, in my case it was be chromedriver.exe for Google Chrome 