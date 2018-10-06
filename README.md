Amazon ECS PHP Simple Demo App
------------------------------

A simple demo created by @marekq to demonstrate AWS CodePipeline, AWS CodeBuild and Amazon ECS with Fargate. You can clone the repository to your own CodeCommit repository and use the included buildspec.yml to automatically build the container and push it to your Amazon ECR repository. Finally, you can leverage CodePipeline to automatically orchestrate the whole deployment process. Within ECS, you could use one of the Load Balancers to automatically distribute traffic to the Fargate containers. 

The container image is based on the ecs-demo-php-simple app repository, but has been modified with a newer OS image and a few modifications to the HTML, JavaScript and PHP code. The landing page displays the external IP address of the container and shows a random background color, which makes it easier to show how the end to end CI/CD deployment works during demo's. 


![alt tag](https://raw.githubusercontent.com/marekq/ecs-demo-php-simple-app/master/docs/webpage.png)


In case of any issues or questions, please reach out to @marekq or raise an issue on GitHub. 
