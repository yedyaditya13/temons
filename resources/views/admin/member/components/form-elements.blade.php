<div class="form-group row align-items-center" :class="{'has-danger': errors.has('code_member'), 'has-success': fields.code_member && fields.code_member.valid }">
    <label for="code_member" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.member.columns.code_member') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.code_member" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('code_member'), 'form-control-success': fields.code_member && fields.code_member.valid}" id="code_member" name="code_member" placeholder="{{ trans('admin.member.columns.code_member') }}">
        <div v-if="errors.has('code_member')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('code_member') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('address'), 'has-success': fields.address && fields.address.valid }">
    <label for="address" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.member.columns.address') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.address" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('address'), 'form-control-success': fields.address && fields.address.valid}" id="address" name="address" placeholder="{{ trans('admin.member.columns.address') }}">
        <div v-if="errors.has('address')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('address') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('phone'), 'has-success': fields.phone && fields.phone.valid }">
    <label for="phone" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.member.columns.phone') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.phone" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('phone'), 'form-control-success': fields.phone && fields.phone.valid}" id="phone" name="phone" placeholder="{{ trans('admin.member.columns.phone') }}">
        <div v-if="errors.has('phone')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('phone') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('checkin'), 'has-success': fields.checkin && fields.checkin.valid }">
    <label for="checkin" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.member.columns.checkin') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="date" v-model="form.checkin" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('checkin'), 'form-control-success': fields.checkin && fields.checkin.valid}" id="checkin" name="checkin" placeholder="{{ trans('admin.member.columns.checkin') }}">
        <div v-if="errors.has('checkin')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('checkin') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('checkout'), 'has-success': fields.checkout && fields.checkout.valid }">
    <label for="checkout" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.member.columns.checkout') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="date" v-model="form.checkout" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('checkout'), 'form-control-success': fields.checkout && fields.checkout.valid}" id="checkout" name="checkout" placeholder="{{ trans('admin.member.columns.checkout') }}">
        <div v-if="errors.has('checkout')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('checkout') }}</div>
    </div>
</div>

<!-- <div class="form-check row" :class="{'has-danger': errors.has('member_status'), 'has-success': fields.member_status && fields.member_status.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="member_status" type="checkbox" v-model="form.member_status" v-validate="''" data-vv-name="member_status"  name="member_status_fake_element">
        <label class="form-check-label" for="member_status">
            {{ trans('admin.member.columns.member_status') }}
        </label>
        <input type="hidden" name="member_status" :value="form.member_status">
        <div v-if="errors.has('member_status')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('member_status') }}</div>
    </div>
</div> -->


