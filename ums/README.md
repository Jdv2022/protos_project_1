
/* CLIENT
	protoc \
  --proto_path=protos_project_1 \
  --php_out=app/Grpc \
  --grpc_out=app/Grpc \
  --plugin=protoc-gen-grpc=/usr/local/bin/grpc_php_plugin \
  protos_project_1/*.proto

*/