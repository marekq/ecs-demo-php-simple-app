Amazon ECS PHP Simple Demo App
------------------------------

A simple demo created by @marekq to demonstrate how CI/CD can be done using various AWS container services. You can deploy the application to both ECS and EKS using the instructions below. 


###  ECS and CodePipeline

You can clone the repository to your own CodeCommit repository and use the included buildspec.yml to automatically build the container and push it to your Amazon ECR repository. Finally, you can leverage CodePipeline to automatically orchestrate the whole deployment process. Within ECS, you could use one of the Load Balancers to automatically distribute traffic to the Fargate containers. 


### EKS and DockerHub

The container can also be deployed to Kubernetes using EKS using the deployment YAML files. In the folder 'k8s-deploy', you will find the neccesary files and scripts to get started. Whenever you run the 'build.sh' script, a namespace, replicaset, ingress controller using ALB and service will be created. You can easily delete these by running 'delete.sh' from the same folder. 


### Modifications made on the original container

The container image is based on the ecs-demo-php-simple app repository, but has been modified with a newer OS image and a few modifications to the HTML, JavaScript and PHP code. The landing page displays the external IP address of the container and shows a unique background color per container host, which makes it easier to show how the end to end CI/CD deployment works during demo's. 


![alt tag](https://raw.githubusercontent.com/marekq/ecs-demo-php-simple-app/master/docs/webpage.png)


In case of any issues or questions, please reach out to @marekq or raise an issue on GitHub. 
