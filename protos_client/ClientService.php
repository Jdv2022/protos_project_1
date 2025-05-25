<?php

namespace protos_project_1\protos_client;

use grpc\GetUserDetails\GetUserDetailsServiceClient;
use grpc\Register\RegisterServiceClient;
use grpc\userRegistrationFormData\UserRegistrationFormDataServiceClient;

class ClientService {

    public function getUserServiceClient(): GetUserDetailsServiceClient {
		return $this->userManagementServiceClient(GetUserDetailsServiceClient::class);
	}
	
	public function getRegisterServiceClient(): RegisterServiceClient {
		return $this->userManagementServiceClient(RegisterServiceClient::class);
	}

	public function getRegistrationFormDataClient(): UserRegistrationFormDataServiceClient {
		return $this->userManagementServiceClient(UserRegistrationFormDataServiceClient::class);
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
