# Ansistrano Showcase: Symfony Application Deployment

This is an example repository intended to show the usage of Ansistrano to deploy a Symfony 5 application in a [Homestead][1]
Virtual Machine

## DISCLAIMER

The only purpose of this repository is to show the usage of Ansistrano. This means that some of the things done here are
made in order to make it easy Ansistrano to work and have a quick demo, for readers to have a clear idea of the workflow.
But they cannot be considered in any case a best practice or the way to go when deploying applications in a real-world
scenario.

## How to make it run

### Install all dependencies

    composer install

### Spin up the Homestead machine

    vagrant up

### Deploy code

    composer deploy

### Check on the browser

    open https://homestead.test


[1]: https://laravel.com/docs/6.x/homestead
