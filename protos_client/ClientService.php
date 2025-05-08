<?php

namespace protos_project_1\protos_client;

use grpc\GetUserDetails\GetUserDetailsServiceClient;
use grpc\Register\RegisterServiceClient;

class ClientService {

    public function getUserServiceClient(): GetUserDetailsServiceClient {
		return $this->userManagementServiceClient(GetUserDetailsServiceClient::class);
	}
	
	public function getRegisterServiceClient(): RegisterServiceClient {
		return $this->userManagementServiceClient(RegisterServiceClient::class);
	}

	function grpcMessageToArray($message): array {
		$data = [];
		$methods = get_class_methods($message);
		foreach ($methods as $method) {
			if (str_starts_with($method, 'get')) {
				$property = lcfirst(substr($method, 3));
				$data[$method] = $message->$method();
			}
		}
		return $data;
	}


	protected function userManagementServiceClient(string $class): mixed {
		return new $class(
			'127.0.0.1:9001',
			[
				'credentials' => \Grpc\ChannelCredentials::createInsecure(),
			]
		);
	}

}
