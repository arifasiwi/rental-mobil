app.controller('TransactionsEditCtrl', ['$state', '$scope', 'transactions','$timeout', 'SweetAlert','toaster', '$stateParams', '$http', function ($state, $scope, transactions,$timeout, SweetAlert,toaster,$stateParams) {
    //Init input addForm variable
    //create transactions
    $scope.process = false;
    $scope.id=$scope.$stateParams.id

    $scope.master = $scope.myModel;
    $scope.form = {

        submit: function (form) {
            var firstError = null;
            if (form.$invalid) {

                var field = null, firstError = null;
                for (field in form) {
                    if (field[0] != '$') {
                        if (firstError === null && !form[field].$valid) {
                            firstError = form[field].$name;
                        }

                        if (form[field].$pristine) {
                            form[field].$dirty = true;
                        }
                    }
                }
                angular.element('.ng-invalid[name=' + firstError + ']').focus();
                SweetAlert.swal("The form cannot be submitted because it contains validation errors!", "Errors are marked with a red, dashed border!", "error");
                return;

            } else {
                SweetAlert.swal("Good job!", "Your form is ready to be submitted!", "success");
                //your code for submit
            }

        },
        reset: function (form) {

            $scope.myModel = angular.copy($scope.master);
            form.$setPristine(true);
        }

    };
    $scope.closeAlert = function (index) {
        $scope.alerts.splice(index, 1);
    };
    $scope.clearInput = function () {
        $scope.myModel.no_plat = null;
        $scope.myModel.type= null;
        $scope.myModel.merk= null;
        $scope.myModel.color= null;
    };
    
//Run Ajax
    transactions.show($scope.id)
        .success(function (data) {
            $scope.myModel= data;
             $scope.myModel.customers= data.customers.name;
             $scope.myModel.drivers= data.drivers.name;
             $scope.myModel.cars= data.cars.merk;
             $scope.myModel.users= data.users.name;
        });
    $scope.updateData = function (isBack) {
        $scope.alerts = [];
        //Set process status
        $scope.process = true;
        //Close Alert

        //Check validation status
        if ($scope.Form.$valid) {
            //run Ajax
            transactions.update($scope.myModel)
                .success(function (data) {
                    if (data.updated == true) {
                        //If back to list after submitting
                        if (isBack == true) {
                            $state.go('app.transactions-list');
                            $scope.toaster = {
                                type: 'success',
                                title: 'Sukses',
                                text: 'Update Data Berhasil!'
                            };
                                toaster.pop($scope.toaster.type, $scope.toaster.title, $scope.toaster.text);
                        } else {
                            $scope.sup();
                            $scope.alerts.push({
                                type: 'success',
                                msg: 'Simpan Data Berhasil!'
                            });
                            $scope.process = false;
                            $scope.toaster = {
                                type: 'success',
                                title: 'Sukses',
                                text: 'Simpan Data Berhasil!'
                            };
                            toaster.pop($scope.toaster.type, $scope.toaster.title, $scope.toaster.text);
                        }
                        //Clear Input
                    } else {
                        $scope.process = false;
                        //$scope.alertset.class = 'orange';
                        $scope.toaster = {
                            type: 'success',
                            title: 'Sukses',
                            text: 'Simpan Data Berhasil!'
                        };
                        toaster.pop($scope.toaster.type, $scope.toaster.title, $scope.toaster.text);
                        $scope.clearInput();

                        //Set Alert message
                        $scope.sup();
                        $scope.alerts.push({
                            type: 'success',
                            msg: 'Simpan Data Berhasil!'
                        });

                    }

                })
                .error(function (data, status) {
                    // unauthorized
                    if (status === 401) {
                        //redirect to login
                        $scope.redirect();
                    }
                    $scope.sup();
                    // Stop Loading
                    $scope.process = false;
                    $scope.alerts.push({
                        type: 'danger',
                        msg: data.validation
                    });
                    $scope.toaster = {
                        type: 'error',
                        title: 'Gagal',
                        text: 'Simpan Data Gagal!'
                    };
                    toaster.pop($scope.toaster.type, $scope.toaster.title, $scope.toaster.text);
                });
        }
    };
    

}]);
