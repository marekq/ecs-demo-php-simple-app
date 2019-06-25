echo 'deleting deploment'
kubectl delete -f demo-ingress.yaml
kubectl delete -f demo-service.yaml
kubectl delete -f demo-deployment.yaml
kubectl delete -f demo-namespace.yaml
