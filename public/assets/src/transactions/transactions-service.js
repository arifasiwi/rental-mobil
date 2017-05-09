/**
 * Created by - LENOVO - on 24/08/2015.
 */
app.factory('transactions', ['$http', function ($http) {
    return {
        // get data dengan pagination dan pencarian data
        get: function (page, term) {
            return $http({
                method: 'get',
                url: '/api/transactions?page=' + page + '&term=' + term,
                headers: {'Content-Type': 'application/x-www-form-urlencoded', 'X-Requested-With': 'XMLHttpRequest'}
            });
        },
        getcustomers: function (page, term) {
            return $http({
                method: 'get',
                url: '/api/customers?page=' + page + '&term=' + term,
                headers: {'Content-Type': 'application/x-www-form-urlencoded', 'X-Requested-With': 'XMLHttpRequest'}
            });
        },

        getcars: function (page, term) {
            return $http({
                method: 'get',
                url: '/api/cars?page=' + page + '&term=' + term,
                headers: {'Content-Type': 'application/x-www-form-urlencoded', 'X-Requested-With': 'XMLHttpRequest'}
            });
        },

        getusers: function (page, term) {
            return $http({
                method: 'get',
                url: '/api/users?page=' + page + '&term=' + term,
                headers: {'Content-Type': 'application/x-www-form-urlencoded', 'X-Requested-With': 'XMLHttpRequest'}
            });
        },

        getdrivers: function (page, term) {
            return $http({
                method: 'get',
                url: '/api/drivers?page=' + page + '&term=' + term,
                headers: {'Content-Type': 'application/x-www-form-urlencoded', 'X-Requested-With': 'XMLHttpRequest'}
            });
        },


        getLasttransactions: function () {
            return $http({
                method: 'get',
                url: '/api/get-last-transactions',
            });
        },

        //Simpan data
        store: function (inputData) {
            return $http({
                method: 'POST',
                url: '/api/transactions',
                data: $.param(inputData)
            });
        },

        //Tampil Data
        show: function (_id) {
            return $http({
                method: 'get',
                url: '/api/transactions/' + _id,
            });
        },

        destroy: function (_id) {
            return $http({
                method: 'delete',
                url: '/api/transactions/' + _id,
            });
        },

        //Update data
        update: function (inputData) {
            return $http({
                method: 'put',
                url: '/api/transactions/' + inputData.id,
                data: $.param(inputData)
            });
        },
        kunci: function (_id) {
            return $http({
                method: 'put',
                url: '/api/kunci-transactions/' + _id
            });
        },
        cekpnguunjung: function (_id) {
            return $http({
                method: 'get',
                url: '/api/cek-pengunjung/' + _id
            });
        },

    }
}]);