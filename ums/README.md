/* SERVER

 	protoc \
  --proto_path=protos_project_1 \
  --plugin=protoc-gen-php-grpc=/usr/local/bin/protoc-gen-php-grpc \
  --php_out=. \
  --php-grpc_out=. \
  protos_project_1/ums/*.proto

*/

/* CLIENT

	protoc \
  --proto_path=protos_project_1 \
  --php_out=. \
  --grpc_out=. \
  --plugin=protoc-gen-grpc=/usr/local/bin/grpc_php_plugin \
  protos_project_1/ums/*.proto

*/