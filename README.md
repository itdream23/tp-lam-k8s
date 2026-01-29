# tp-lam-k8s

# TP4 – Déploiement LAMP avec Kubernetes

## Objectif
- Build image Docker via GitHub Actions
- Stockage sur Docker Hub
- Déploiement Kubernetes (Minikube)

## Déploiement
```bash
kubectl apply -f k8s/
minikube service lamp-service
