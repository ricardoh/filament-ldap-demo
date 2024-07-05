# Install

```bash
cp .env.example .env
touch database/database.sqlite
docker run --rm -v "$(pwd)":/opt -w /opt laravelsail/php83-composer:latest composer install --ignore-platform-req=ext-ldap --ignore-platform-req=ext-intl
vendor/bin/sail up -d
vendor/bin/sail artisan key:generate
vendor/bin/sail artisan migrate
```

# Test

Open the browser at [http://localhost/](http://localhost). You can see other users from
the public LDAP server at [https://www.forumsys.com/2022/05/10/online-ldap-test-server/](https://www.forumsys.com/2022/05/10/online-ldap-test-server/).
