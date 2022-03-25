import AppForm from '../app-components/Form/AppForm';

Vue.component('member-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                code_member:  '' ,
                address:  '' ,
                phone:  '' ,
                checkin:  '' ,
                checkout:  '' ,
                member_status:  false ,
                
            }
        }
    }

});