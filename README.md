Terra-API is based on the API Platform.
The official API Platform documentation is available [on the API Platform website](https://api-platform.com).

[![Build Status](https://travis-ci.org/m1305/terra-api.svg?branch=master)](https://travis-ci.org/m1305/terra-api)
[![Coverage Status](https://coveralls.io/repos/github/m1305/terra-api/badge.svg?branch=master)](https://coveralls.io/github/m1305/terra-api?branch=master)

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