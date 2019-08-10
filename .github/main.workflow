workflow "on push" {
  on = "push"
  resolves = [
    "phpunit",
    "phpinsights"
  ]
}

action "composer install" {
  uses = "pxgamer/composer-action@v1.0.1"
  args = "install"
}

action "phpunit" {
  needs = ["composer install"]
  uses = "franzliedke/gh-action-php@master"
  runs = "php7.1 vendor/bin/phpunit"
}

action "phpinsights" {
  needs = ["composer install"]
  uses = "stefanzweifel/phpinsights-action@v1.0.0"
}
