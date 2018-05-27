Terra-API is based on the API Platform.
The official API Platform documentation is available [on the API Platform website](https://api-platform.com).



[![Build Status](https://travis-ci.org/api-platform/core.svg?branch=master)](https://travis-ci.org/api-platform/core)
[![Build status](https://ci.appveyor.com/api/projects/status/grwuyprts3wdqx5l?svg=true)](https://ci.appveyor.com/project/dunglas/dunglasapibundle)
[![Coverage Status](https://coveralls.io/repos/github/api-platform/core/badge.svg)](https://coveralls.io/github/api-platform/core)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/92d78899-946c-4282-89a3-ac92344f9a93/mini.png)](https://insight.sensiolabs.com/projects/92d78899-946c-4282-89a3-ac92344f9a93)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/api-platform/core/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/api-platform/core/?branch=master)

Install
-------

* `docker-compose up -d # Running in detached mode`

It`s Ready
-------

Open [localhost](https://localhost) in the web browser.

Various
-------
* To see the container's logs, run:<br>
`docker-compose logs -f # follow the logs`

* Create the related database tables:<br>
`docker-compose exec php bin/console doctrine:schema:create`