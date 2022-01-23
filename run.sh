#!/bin/bash

echo "Run cadvisor"
echo "+--------------+"
kubectl apply -f cadvisor.daemonset.yaml
echo -e "+--------------+\n"

echo "Run postgres"
echo "+--------------+"
kubectl apply -f postgres.secret.yaml \
-f postgres.configmap.yaml \
-f postgres.volume.yaml \
-f postgres.deployment.yaml \
-f postgres.service.yaml
echo -e "+--------------+\n"

echo "Run redis"
echo "+--------------+"
kubectl apply -f redis.configmap.yaml \
-f redis.deployment.yaml \
-f redis.service.yaml
echo -e "+--------------+\n"

echo "Run webapp"
echo "+--------------+"
kubectl apply -f poll.deployment.yaml \
-f worker.deployment.yaml \
-f result.deployment.yaml \
-f poll.service.yaml \
-f result.service.yaml \
-f poll.ingress.yaml \
-f result.ingress.yaml
echo -e "+--------------+\n"

echo "Run traefik"
echo "+--------------+"
kubectl apply -f traefik.rbac.yaml \
-f traefik.deployment.yaml \
-f traefik.service.yaml
echo -e "+--------------+\n"
