toHeroku() {
    url=$1
    if [[ $url =~ postgres:\/\/([^:]+):([^@]+)@([^:]+):([^/]+)\/(.+) ]]; then
        dbUsername=${BASH_REMATCH[1]}
        dbPassword=${BASH_REMATCH[2]}
        dbHost=${BASH_REMATCH[3]}
        dbPort=${BASH_REMATCH[4]}
        dbName=${BASH_REMATCH[5]}

        echo "heroku config:set DB_USERNAME=$dbUsername"
        echo "heroku config:set DB_PASSWORD=$dbPassword"
        echo "heroku config:set DB_HOST=$dbHost"
        echo "heroku config:set DB_PORT=$dbPort"
        echo "heroku config:set DB_DATABASE=$dbName"
    fi
}
