<?php

namespace  App\Trait\Validator{

    use Illuminate\Support\Facades\Validator;
    use Illuminate\Validation\Rule;
    use Illuminate\Validation\Rules\File;
    use Illuminate\Validation\Validator as ValidationValidator;

    trait useValidatorMangSeller{

        public function creadentialsStore(array $attributte): ValidationValidator{
            $credentials = Validator::make($attributte, [
                'name_store'   => ['required', 'min:10', 'max:254'],
                'path_store'   => ['required', File::image()->types(['png', 'jpg', 'jpeg', 'web'])
                                  ->max(4*1024)->dimensions(Rule::dimensions()
                                  ->maxWidth(300)->maxHeight(300))],
                'store_status' => ['required']
            ]);
            return $credentials;
        }

        public function creadentialsStatus(array $attribute) : ValidationValidator{
            $credentials = Validator::make($attribute, [
                'status'            => ['required', Rule::in(['open', 'close'])],
                'actived_at_start'  => ['required'],
                'actived_at_start'  => ['required'],
                'id'                => ['required', 'exists:store_statuses,id']
            ]);
            return $credentials;
        }

        public function credentialUpdateAccountBank(array $attribute) : ValidationValidator{
            $credentials = Validator::make($attribute, [
                'account_name'       => ['required'],
                'account_number'     => ['required'],
                'id_account_bank'    => ['required', 'exists:account_banks,id'],
                'id'                 => ['required', 'exists:suplier_account_banks,id']
            ]);
            return $credentials;
        }

        public function credentialsStoreAccountBank(array $attribute){
            $credentials = Validator::make($attribute, [
                'account_name'       => ['required'],
                'account_number'     => ['required', 'unique:suplier_account_banks,account_number'],
                'id_supliers'        => ['required', 'exists:suplliers,id'],
                'id_account_bank'    => ['required', 'exists:account_banks,id'],
            ]);
            return $credentials;
        }
    }
}