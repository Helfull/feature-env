workflow "Main" {
  on = "push"
  resolves = ["PHPCS"]
}

action "PHPCS" {
  uses = "docker://oskarstark/phpcs-ga"
  secrets = ["GITHUB_TOKEN"]
}