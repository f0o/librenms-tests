# librenms-tests

Requires: PhantomJS with webdriver on port 4444

Disclaimer: I have no idea about codeception, this is just a first shot at it.
If you know codeception, please join IRC! (Freenode ##librenms)

# Run

I suggest `codecept run --report --html [-g group1 -g ...]`. It gives you a nice html-report in `_output`.

# Tests

## Acceptance Tests

### 00-sanity

Also accessable using group `sanity`

```text
tests/acceptance/00-sanity/indexCept.php
tests/acceptance/00-sanity/installCept.php
tests/acceptance/00-sanity/gitCept.php
```

### 05-auth

Also accessable using group `auth`

```text
tests/acceptance/05-auth/loginCept.php
```

### alerts

Also accessable using group `alerts`

```text
tests/acceptance/alerts/00-mapsCept.php
tests/acceptance/alerts/00-rulesCept.php
tests/acceptance/alerts/00-scheduleCept.php
tests/acceptance/alerts/05-rules-addCept.php
tests/acceptance/alerts/05-schedule-addCept.php
tests/acceptance/alerts/10-maps-addCept.php
tests/acceptance/alerts/99-rule-delCept.php
tests/acceptance/alerts/99-schedule-delCept.php
```

### devices

Also accessable using group `devices`

```text
tests/acceptance/devices/list-Cept.php
tests/acceptance/devices/graphs-Cept.php
```

### zz-auth

Also accessable using group `auth`

```text
tests/acceptance/zz-auth/logoutCept.php
```
