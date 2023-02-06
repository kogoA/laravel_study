zip -r github_to_s3.zip /home/runner/work/laravel_study/laravel_study    
aws s3 cp github_to_s3.zip s3://laravel-ec-bucket