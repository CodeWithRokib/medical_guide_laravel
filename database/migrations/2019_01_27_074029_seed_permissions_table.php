<?php

use App\Models\Permission;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('permissions', function (Blueprint $table) {
            $permissions = [
                ['name'=>'View User','permission_key'=>'UserManagement/user-create','label_id'=>'1'],
                ['name'=>'Add User','permission_key'=>'UserManagement/user-store','label_id'=>'1'],
                ['name'=>'Update User','permission_key'=>'UserManagement/update-user','label_id'=>'1'],
                ['name'=>'Delete User','permission_key'=>'UserManagement/erase','label_id'=>'1'],
                ['name'=>'View Role','permission_key'=>'UserManagement/role-view','label_id'=>'2'],
                ['name'=>'Add Role','permission_key'=>'UserManagement/role-create','label_id'=>'2'],
                ['name'=>'Update Role','permission_key'=>'UserManagement/update-role','label_id'=>'2'],
                ['name'=>'Delete Role','permission_key'=>'UserManagement/role/erase','label_id'=>'2'],
                ['name'=>'View Company','permission_key'=>'CompanyManagement/company','label_id'=>'3'],
                ['name'=>'Add Company','permission_key'=>'CompanyManagement/company','label_id'=>'3'],
                ['name'=>'Update Company','permission_key'=>'CompanyManagement/update','label_id'=>'3'],
                ['name'=>'Delete Company','permission_key'=>'CompanyManagement/erase','label_id'=>'3'],
                ['name'=>'View Supplier','permission_key'=>'SupplierManagement/supplier','label_id'=>'4'],
                ['name'=>'Add Supplier','permission_key'=>'SupplierManagement/supplier','label_id'=>'4'],
                ['name'=>'Update Supplier','permission_key'=>'SupplierManagement/update','label_id'=>'4'],
                ['name'=>'Delete Supplier','permission_key'=>'SupplierManagement/supplier/erase','label_id'=>'4'],
                ['name'=>'View Vaccine','permission_key'=>'ProductManagement/vaccine','label_id'=>'5'],
                ['name'=>'Add Vaccine','permission_key'=>'ProductManagement/save-vaccine','label_id'=>'5'],
                ['name'=>'Update Vaccine','permission_key'=>'ProductManagement/update','label_id'=>'5'],
                ['name'=>'Delete Vaccine','permission_key'=>'ProductManagement/erase','label_id'=>'5'],
                ['name'=>'View Health Product','permission_key'=>'ProductManagement/view-other-product','label_id'=>'6'],
                ['name'=>'Add Health Product','permission_key'=>'ProductManagement/save-other-product','label_id'=>'6'],
                ['name'=>'Update Health Product','permission_key'=>'ProductManagement/update-otherproduct','label_id'=>'6'],
                ['name'=>'Delete Health Product','permission_key'=>'ProductManagement/erase-otherproduct','label_id'=>'6'],
                ['name'=>'View Vaccine Purchase','permission_key'=>'PurchaseManagement/view-purchase','label_id'=>'7'],
                ['name'=>'Add Vaccine Purchase','permission_key'=>'PurchaseManagement/purchase','label_id'=>'7'],
                ['name'=>'View Health Product Purchase','permission_key'=>'PurchaseManagement/view-other-product-purchase','label_id'=>'8'],
                ['name'=>'Add Health Product Purchase','permission_key'=>'PurchaseManagement/add-other-pro-purchase','label_id'=>'8'],
                ['name'=>'Stock','permission_key'=>'StockManagement/vaccine-stock','label_id'=>'9'],
                ['name'=>'Sale Vaccine','permission_key'=>'PatientManagement/vaccie-apply','label_id'=>'10'],
                ['name'=>'Sale Health Product','permission_key'=>'PatientManagement/sell-other-product','label_id'=>'10'],
                ['name'=>'Product Transfer','permission_key'=>'TransferManagement/vaccine-transfer','label_id'=>'11'],
                ['name'=>'Product Transfer History','permission_key'=>'TransferManagement/vaccine-transfer-history','label_id'=>'11'],
                ['name'=>'Sale/Purchase Invoice','permission_key'=>'InvoiceManagement/all-purchase-report','label_id'=>'12'],
                ['name'=>'All Dues','permission_key'=>'InvoiceManagement/dueinvoice','label_id'=>'12'],
                ['name'=>'All Money Reciepts','permission_key'=>'InvoiceManagement/money-receipt','label_id'=>'12'],
                ['name'=>'View Expense Category','permission_key'=>'ExpenseManagement/expense-management','label_id'=>'13'],
                ['name'=>'Add Expense Category','permission_key'=>'ExpenseManagement/expense-management','label_id'=>'13'],
                ['name'=>'View Expense','permission_key'=>'ExpenseManagement/daily-expenses','label_id'=>'13'],
                ['name'=>'Add Expense','permission_key'=>'ExpenseManagement/daily-expenses','label_id'=>'13'],
                ['name'=>'Sale / Purchase Report','permission_key'=>'ReportManagement/purchase-report','label_id'=>'14'],
                ['name'=>'Customer / Supplier Report','permission_key'=>'ReportManagement/customer-supplier-report','label_id'=>'14'],
                ['name'=>'Profit Report','permission_key'=>'ReportManagement/profit-report','label_id'=>'14'],
                ['name'=>'Daily Profit / Loss Report','permission_key'=>'ReportManagement/daily-profit-report','label_id'=>'14'],
                ['name'=>'Expense Report','permission_key'=>'ReportManagement/office-expanses-report','label_id'=>'14'],
                ['name'=>'View Hospital','permission_key'=>'HospitalManagement/hospital','label_id'=>'15'],
                ['name'=>'Add Hospital','permission_key'=>'HospitalManagement/hospital','label_id'=>'15'],
                ['name'=>'Update Hospital','permission_key'=>'HospitalManagement/update','label_id'=>'15'],
                ['name'=>'Delete Hospital','permission_key'=>'HospitalManagement/erase','label_id'=>'15'],
                ['name'=>'View Doctor','permission_key'=>'DoctorManagement/all-doctor','label_id'=>'16'],
                ['name'=>'Add Doctor','permission_key'=>'DoctorManagement/doctor','label_id'=>'16'],
                ['name'=>'Update Doctor','permission_key'=>'DoctorManagement/update','label_id'=>'16'],
                ['name'=>'Delete Doctor','permission_key'=>'DoctorManagement/erase','label_id'=>'16'],
                ['name'=>'View Specialist','permission_key'=>'DoctorManagement/specialist','label_id'=>'17'],
                ['name'=>'Add  Specialist','permission_key'=>'DoctorManagement/store-specialist','label_id'=>'17'],
                ['name'=>'Update Specialist','permission_key'=>'DoctorManagement/update-specialist','label_id'=>'17'],
                ['name'=>'Delete Specialist','permission_key'=>'DoctorManagement/erase-specialist','label_id'=>'17'],
                ['name'=>'View Division','permission_key'=>'DivisionManagement/division','label_id'=>'18'],
                ['name'=>'Add Division','permission_key'=>'DivisionManagement/division','label_id'=>'18'],
                ['name'=>'Update Division','permission_key'=>'DivisionManagement/update','label_id'=>'18'],
                ['name'=>'Delete Division','permission_key'=>'DivisionManagement/erase','label_id'=>'18'],
                ['name'=>'View Blood Bank','permission_key'=>'BloodBankManagement/view','label_id'=>'19'],
                ['name'=>'Add  Blood Bank','permission_key'=>'BloodBankManagement/bloodbank','label_id'=>'19'],
                ['name'=>'Update Blood Bank','permission_key'=>'BloodBankManagement/update-bloodbank','label_id'=>'19'],
                ['name'=>'Delete Blood Bank','permission_key'=>'BloodBankManagement/erase','label_id'=>'19'],
                ['name'=>'View Ambulance','permission_key'=>'AmbulanceManagement/ambulance','label_id'=>'20'],
                ['name'=>'Add Ambulance','permission_key'=>'AmbulanceManagement/save','label_id'=>'20'],
                ['name'=>'Update Ambulance','permission_key'=>'AmbulanceManagement/update/','label_id'=>'20'],
                ['name'=>'Delete Ambulance','permission_key'=>'AmbulanceManagement/erase','label_id'=>'20'],
                ['name'=>'View Patient','permission_key'=>'PatientManagement/add-vaccine-applier','label_id'=>'21'],
                ['name'=>'Add Patient','permission_key'=>'PatientManagement/store-vaccine-applier','label_id'=>'21'],
                ['name'=>'Update Patient','permission_key'=>'PatientManagement/update-applier','label_id'=>'21'],
                ['name'=>'Delete Patient','permission_key'=>'PatientManagement/erase','label_id'=>'21'],
                ['name'=>'Cart Item View','permission_key'=>'wishlist-view','label_id'=>'22'],
                ['name'=>'Cart Item Delete','permission_key'=>'wishlist/erase','label_id'=>'22']
            ];

            foreach ($permissions as $permission){
                Permission::query()->create($permission);
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('permissions', function (Blueprint $table) {
            //
        });
    }
}
