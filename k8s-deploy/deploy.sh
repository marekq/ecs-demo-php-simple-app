echo 'starting deploment'
kubectl apply -f demo-namespace.yaml
kubectl apply -f demo-deployment.yaml
kubectl apply -f demo-service.yaml
kubectl apply -f demo-ingress.yaml

kubectl get ingress/demo -n demo
kubectl get pods -n demo -o wide
