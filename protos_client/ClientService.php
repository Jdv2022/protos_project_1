<?php

namespace protos_project_1\protos_client;

use grpc\GetUserDetails\GetUserDetailsServiceClient;
use grpc\Register\RegisterServiceClient;
use grpc\userRegistrationFormData\UserRegistrationFormDataServiceClient;
use grpc\getUsers\GetUsersServiceClient;
use grpc\userClockIn\UserClockInServiceClient;
use grpc\getAttendance\GetAttendanceClient;
use grpc\userClockOut\UserClockOutServiceClient;
use grpc\CreateTeam\CreateTeamServiceClient;
use grpc\CreateShift\CreateShiftServiceClient;
use grpc\AssignUserToTeam\AssignUserToTeamServiceClient;
use grpc\TeamLists\TeamListsServiceClient;
use grpc\AssignUserShift\AssignUserShiftServiceClient;
use grpc\GetArchives\GetArchivesServiceClient;
use grpc\AddArchive\AddArchiveServiceClient;
use grpc\RemoveArchive\RemoveArchiveServiceClient;
use grpc\Overview\OverviewServiceClient;
use grpc\GetLogs\GetLogsServiceClient;
use grpc\EditUserDetails\EditUserDetailsServiceClient;
use grpc\TeamUsersLists\TeamUsersListsServiceClient;
use grpc\EditTeam\EditTeamServiceClient;
use grpc\RemoveUserTeam\RemoveUserTeamServiceClient;
use grpc\DeleteTeam\DeleteTeamServiceClient;
use grpc\GetDepartment\GetDepartmentServiceClient;
use grpc\SuggestedMember\SuggestedMemberServiceClient;
use grpc\CreateDepartment\CreateDepartmentServiceClient;
use grpc\GetDepartmentDetail\GetDepartmentDetailServiceClient;
use grpc\DeleteDepartment\DeleteDepartmentServiceClient;
use grpc\EditDepartment\EditDepartmentServiceClient;
use grpc\SuggestedMemberDepartment\SuggestedMemberDepartmentServiceClient;
use grpc\GetDepartmentMember\GetDepartmentMemberServiceClient;

class ClientService {
	// UMS
    public function getUserServiceClient(): GetUserDetailsServiceClient {
		return $this->userManagementServiceClient(GetUserDetailsServiceClient::class);
	}
	// UMS
	public function getRegisterServiceClient(): RegisterServiceClient {
		return $this->userManagementServiceClient(RegisterServiceClient::class);
	}
	// UMS
	public function getRegistrationFormDataClient(): UserRegistrationFormDataServiceClient {
		return $this->userManagementServiceClient(UserRegistrationFormDataServiceClient::class);
	}
	// UMS
	public function getUsers(): GetUsersServiceClient {
		return $this->userManagementServiceClient(GetUsersServiceClient::class);
	}
	// UMS
	public function clockIn(): UserClockInServiceClient {
		return $this->userManagementServiceClient(UserClockInServiceClient::class);
	}
	// UMS
	public function clockOut(): UserClockOutServiceClient {
		return $this->userManagementServiceClient(UserClockOutServiceClient::class);
	}
	// UMS
	public function getAttendanceClient(): GetAttendanceClient {
		return $this->userManagementServiceClient(GetAttendanceClient::class);
	}
	// UMS
	public function CreateTeamClient(): CreateTeamServiceClient {
		return $this->userManagementServiceClient(CreateTeamServiceClient::class);
	}
	// UMS
	public function AssignUserToTeam(): AssignUserToTeamServiceClient {
		return $this->userManagementServiceClient(AssignUserToTeamServiceClient::class);
	}
	// UMS
	public function TeamListsServiceClient(): TeamListsServiceClient {
		return $this->userManagementServiceClient(TeamListsServiceClient::class);
	}
	// UMS
	public function CreateUserShiftServiceClient(): CreateShiftServiceClient {
		return $this->userManagementServiceClient(CreateShiftServiceClient::class);
	}
	// UMS
	public function AssignUserShiftServiceClient(): AssignUserShiftServiceClient {
		return $this->userManagementServiceClient(AssignUserShiftServiceClient::class);
	}

	// UMS
	public function GetArchivesServiceClient(): GetArchivesServiceClient {
		return $this->userManagementServiceClient(GetArchivesServiceClient::class);
	}

	// UMS
	public function AddArchiveServiceClient(): AddArchiveServiceClient {
		return $this->userManagementServiceClient(AddArchiveServiceClient::class);
	}	

	// UMS
	public function RemoveArchiveServiceClient(): RemoveArchiveServiceClient {
		return $this->userManagementServiceClient(RemoveArchiveServiceClient::class);
	}	

	// UMS
	public function OverviewServiceClient(): OverviewServiceClient {
		return $this->userManagementServiceClient(OverviewServiceClient::class);
	}	

	// UMS
	public function GetLogsServiceClient(): GetLogsServiceClient {
		return $this->userManagementServiceClient(GetLogsServiceClient::class);
	}	

	// UMS
	public function EditUserDetailsServiceClient(): EditUserDetailsServiceClient {
		return $this->userManagementServiceClient(EditUserDetailsServiceClient::class);
	}	

	// UMS
	public function TeamUsersListsServiceClient(): TeamUsersListsServiceClient {
		return $this->userManagementServiceClient(TeamUsersListsServiceClient::class);
	}	

	// UMS
	public function SuggestedMemberServiceClient(): SuggestedMemberServiceClient {
		return $this->userManagementServiceClient(SuggestedMemberServiceClient::class);
	}	

	// UMS
	public function EditTeamServiceClient(): EditTeamServiceClient {
		return $this->userManagementServiceClient(EditTeamServiceClient::class);
	}	

	// UMS
	public function RemoveUserTeamServiceClient(): RemoveUserTeamServiceClient {
		return $this->userManagementServiceClient(RemoveUserTeamServiceClient::class);
	}	

	// UMS
	public function DeleteTeamServiceClient(): DeleteTeamServiceClient {
		return $this->userManagementServiceClient(DeleteTeamServiceClient::class);
	}	

	// UMS
	public function GetDepartmentServiceClient(): GetDepartmentServiceClient {
		return $this->userManagementServiceClient(GetDepartmentServiceClient::class);
	}	

	// UMS
	public function CreateDepartmentServiceClient(): CreateDepartmentServiceClient {
		return $this->userManagementServiceClient(CreateDepartmentServiceClient::class);
	}	

	// UMS
	public function GetDepartmentDetailServiceClient(): GetDepartmentDetailServiceClient {
		return $this->userManagementServiceClient(GetDepartmentDetailServiceClient::class);
	}	

	// UMS
	public function EditDepartmentServiceClient(): EditDepartmentServiceClient {
		return $this->userManagementServiceClient(EditDepartmentServiceClient::class);
	}	

	// UMS
	public function SuggestedMemberDepartmentServiceClient(): SuggestedMemberDepartmentServiceClient {
		return $this->userManagementServiceClient(SuggestedMemberDepartmentServiceClient::class);
	}	

	// UMS
	public function SuggestedMember(): SuggestedMember {
		return $this->userManagementServiceClient(SuggestedMember::class);
	}	

	// UMS
	public function GetDepartmentMemberServiceClient(): GetDepartmentMemberServiceClient {
		return $this->userManagementServiceClient(GetDepartmentMemberServiceClient::class);
	}	
	
	protected function userManagementServiceClient(string $class): mixed {
		return new $class(
			'ums-app-1:9001',
			[
				'credentials' => \Grpc\ChannelCredentials::createInsecure(),
			]
		);
	}

}
