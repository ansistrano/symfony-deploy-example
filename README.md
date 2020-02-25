# Ansistrano Showcase: Symfony Application Deployment

This is an example repository intended to show the usage of Ansistrano to deploy a Symfony 5 application in a [Homestead][1]
Virtual Machine

## DISCLAIMER

The only purpose of this repository is to show the usage of Ansistrano. This means that some of the things done here are
made in order to make it easy Ansistrano to work and have a quick demo, for readers to have a clear idea of the workflow.
But they cannot be considered in any case a best practice or the way to go when deploying applications in a real-world
scenario.

## How to make it run

Clone this repository into your Github account and then clone it from there.

### Install all dependencies

    composer install

### Spin up the Homestead machine

    vagrant up

### Generate your own deploy key

Follow the instructions here

https://developer.github.com/v3/guides/managing-deploy-keys/#deploy-keys

Overwriting the files

`id_rsa.pub`
`id_rsa`

With the generated SSH keys.

### Deploy code

    composer deploy

### Check on the browser

    open https://homestead.test:44300/


[1]: https://laravel.com/docs/6.x/homestead
