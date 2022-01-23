#!/bin/bash

echo "Delete cadvisor"
echo "+--------------+"
kubectl delete -f cadvisor.daemonset.yaml
echo -e "+--------------+\n"

echo "Delete postgres"
echo "+--------------+"
kubectl delete -f postgres.secret.yaml \
-f postgres.configmap.yaml \
-f postgres.volume.yaml \
-f postgres.deployment.yaml \
-f postgres.service.yaml
echo -e "+--------------+\n"

echo "Delete redis"
echo "+--------------+"
kubectl delete -f redis.configmap.yaml \
-f redis.deployment.yaml \
-f redis.service.yaml
echo -e "+--------------+\n"

echo "Delete webapp"
echo "+--------------+"
kubectl delete -f poll.deployment.yaml \
-f worker.deployment.yaml \
-f result.deployment.yaml \
-f poll.service.yaml \
-f result.service.yaml \
-f poll.ingress.yaml \
-f result.ingress.yaml
echo -e "+--------------+\n"

echo "Delete traefik"
echo "+--------------+"
kubectl delete -f traefik.rbac.yaml \
-f traefik.deployment.yaml \
-f traefik.service.yaml
echo -e "+--------------+\n"
