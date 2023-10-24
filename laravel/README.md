### Build prod

docker build . --target production -t 857710677358.dkr.ecr.eu-central-1.amazonaws.com/laravel-boilerplate:069a654


### Docker login

aws ecr get-login-password --region eu-central-1 | docker login --username AWS --password-stdin 857710677358.dkr.ecr.eu-central-1.amazonaws.com

