<?php

namespace protos_project_1\protos_client;

use Users\UserServiceClient;

class ClientService {

    public function userServiceClient(): UserServiceClient {
        return new UserServiceClient(
            '127.0.0.1:9001',
            [
                'credentials' => \Grpc\ChannelCredentials::createInsecure(),
            ]
        );
    }

	function grpcMessageToArray($message): array {
		$data = [];
		$methods = get_class_methods($message);
		foreach ($methods as $method) {
			if (str_starts_with($method, 'get')) {
				$property = lcfirst(substr($method, 3));
				$data[$property] = $message->$method();
			}
		}
		return $data;
	}

}
