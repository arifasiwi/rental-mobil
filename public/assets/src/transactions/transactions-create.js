app.controller('TransactionsCreateCtrl', ['$state', '$scope', 'transactions','$uibModal','$log', '$timeout', 'SweetAlert','toaster','$http', function ($state, $scope, transactions, $uibModal, $log, $timeout, SweetAlert,toaster) {
    //Init input addForm variable
    //create transactions
    $scope.process = false;

    $scope.master = $scope.myModel;

    // customers dialog
    $scope.dtcustomers = ''
    $scope.opencustomers = function (size) {

        var modalInstance = $uibModal.open({
            templateUrl: 'assets/src/transactions/customers.dialog.html',
            controller: 'ModalMembers',
            size: size,
            resolve: {
                items: function () {
                    return $scope.items;
                }
            }
        });

        modalInstance.result.then(function (data) {
            // $scope.selected = selectedItem;
            $scope.myModel ={}
            $scope.dtcustomers.id = data.id
            $scope.myModel.customers= data.name

            console.log(data.name);
        }, function () {
            $log.info('Modal dismissed at: ' + new Date());
        });
    };

//cars dialog
    $scope.dtcars = ''
    $scope.opencars = function (size) {

        var modalInstance = $uibModal.open({
            templateUrl: 'assets/src/transactions/cars.dialog.html',
            controller: 'ModalMembers',
            size: size,
            resolve: {
                items: function () {
                    return $scope.items;
                }
            }
        });

        modalInstance.result.then(function (data) {
            // $scope.selected = selectedItem;
            $scope.myModel ={}
            $scope.dtcars.id = data.id
            $scope.myModel.cars= data.name

            console.log(data.name);
        }, function () {
            $log.info('Modal dismissed at: ' + new Date());
        });
    };

//drivers dialog
    $scope.dtdrivers = ''
    $scope.opendrivers = function (size) {

        var modalInstance = $uibModal.open({
            templateUrl: 'assets/src/transactions/drivers.dialog.html',
            controller: 'ModalMembers',
            size: size,
            resolve: {
                items: function () {
                    return $scope.items;
                }
            }
        });

        modalInstance.result.then(function (data) {
            // $scope.selected = selectedItem;
            $scope.myModel ={}
            $scope.dtdrivers.id = data.id
            $scope.myModel.drivers= data.name

            console.log(data.name);
        }, function () {
            $log.info('Modal dismissed at: ' + new Date());
        });
    };

//users dialog
    $scope.dtusers = ''
    $scope.openusers = function (size) {

        var modalInstance = $uibModal.open({
            templateUrl: 'assets/src/transactions/users.dialog.html',
            controller: 'ModalMembers',
            size: size,
            resolve: {
                items: function () {
                    return $scope.items;
                }
            }
        });

        modalInstance.result.then(function (data) {
            // $scope.selected = selectedItem;
            $scope.myModel ={}
            $scope.dtusers.id = data.id
            $scope.myModel.users= data.name

            console.log(data.name);
        }, function () {
            $log.info('Modal dismissed at: ' + new Date());
        });
    };

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
    $scope.submitData = function (isBack) {
        $scope.alerts = [];
        //Set process status
        $scope.process = true;
        //Close Alert

        //Check validation status
        if ($scope.Form.$valid) {
            $scope.myModel.customers_id = $scope.dtcustomers.id;
            //run Ajax
            transactions.store($scope.myModel)
                .success(function (data) {
                    if (data.created == true) {
                        //If back to list after submitting
                        if (isBack == true) {
                            $state.go('app.transactions-list');
                            $scope.toaster = {
                                type: 'success',
                                title: 'Sukses',
                                text: 'Simpan Data Berhasil!'
                            };
                                toaster.pop($scope.toaster.type, $scope.toaster.title, $scope.toaster.text);
                        } else {
                            $scope.clearInput();
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

app.controller('ModalMembers', ['$state', '$scope', 'transactions', '$uibModalInstance', '$stateParams', function ($state, $scope, transactions, $uibModalInstance, $stateParams) {
    $scope.main = {
        page: 1,
        term: ''
    };

    $scope.isLoading = true;
    $scope.isLoaded = false;

    $scope.setLoader = function (status) {
        if (status == true) {
            $scope.isLoading = true;
            $scope.isLoaded = false;
        } else {
            $scope.isLoading = false;
            $scope.isLoaded = true;
        }
    };
    //Set process status to false
    $scope.process = false;

    //Init Alert status
    $scope.alertset = {
        show: 'hide',
        class: 'green',

        msg: ''
    };

    $scope.setLoader(true);

    //Init input form variable
    $scope.input = '';

    //Init Alert status
    $scope.alertset = {
        show: 'hide',
        class: 'green',
        msg: ''
    };
    $scope.pilih = function (data) {

        $scope.selected = data;
        $uibModalInstance.close(data);

    };
    //Run Ajax yang langsung ada data
    //drop down edit yang ada data

    // init get data
    transactions.getcustomers($scope.main.page, $scope.main.term)
        .success(function (data) {

            //Change Loading status
            $scope.setLoader(false);

            // result data
            $scope.input = data.data;

            // set the current page
            $scope.current_page = data.current_page;

            // set the last page
            $scope.last_page = data.last_page;

            // set the data from
            $scope.from = data.from;

            // set the data until to
            $scope.to = data.to;

            // set the total result data
            $scope.total = data.total;
        })
        .error(function (data, status) {
            // unauthorized
            if (status === 401) {
                //redirect to login
                $scope.redirect();
            }
            console.log(data);
        });

    // get data
    $scope.getData = function () {

        //Start loading
        $scope.setLoader(true);

        transactions.getcustomers($scope.main.page, $scope.main.term)
            .success(function (data) {

                //Stop loading
                $scope.setLoader(false);

                // result data
                $scope.input = data.data;

                // set the current page
                $scope.current_page = data.current_page;

                // set the last page
                $scope.last_page = data.last_page;

                // set the data from
                $scope.from = data.from;

                // set the data until to
                $scope.to = data.to;

                // set the total result data
                $scope.total = data.total;
            })
            .error(function (data, status) {
                // unauthorized
                if (status === 401) {
                    //redirect to login
                    $scope.redirect();
                }
                console.log(data);
            });
    };

    // Navigasi halaman terakhir
    $scope.lastPage = function () {
        //Disable All Controller
        $scope.main.page = $scope.last_page;
        $scope.getData();
    };

    // Navigasi halaman selanjutnya
    $scope.nextPage = function () {
        // jika page = 1 < halaman terakhir
        if ($scope.main.page < $scope.last_page) {
            // halaman saat ini ditambah increment++
            $scope.main.page++
        }
        // panggil ajax data
        $scope.getData();
    };

    // Navigasi halaman sebelumnya
    $scope.previousPage = function () {
        //Disable All Controller

        // jika page = 1 > 1
        if ($scope.main.page > 1) {
            // page dikurangi decrement —
            $scope.main.page--
        }
        // panggil ajax data
        $scope.getData();
    };

    // Navigasi halaman pertama
    $scope.firstPage = function () {
        //Disable All Controller

        $scope.main.page = 1;

        $scope.getData()
    };


    //Close Dialog
    $scope.cancel = function () {
        $uibModalInstance.dismiss('cancel');
    }
}]);

app.controller('ModalMembers', ['$state', '$scope', 'transactions', '$uibModalInstance', '$stateParams', function ($state, $scope, transactions, $uibModalInstance, $stateParams) {
    $scope.main = {
        page: 1,
        term: ''
    };

    $scope.isLoading = true;
    $scope.isLoaded = false;

    $scope.setLoader = function (status) {
        if (status == true) {
            $scope.isLoading = true;
            $scope.isLoaded = false;
        } else {
            $scope.isLoading = false;
            $scope.isLoaded = true;
        }
    };
    //Set process status to false
    $scope.process = false;

    //Init Alert status
    $scope.alertset = {
        show: 'hide',
        class: 'green',

        msg: ''
    };

    $scope.setLoader(true);

    //Init input form variable
    $scope.input = '';

    //Init Alert status
    $scope.alertset = {
        show: 'hide',
        class: 'green',
        msg: ''
    };
    $scope.pilih = function (data) {

        $scope.selected = data;
        $uibModalInstance.close(data);

    };
    //Run Ajax yang langsung ada data
    //drop down edit yang ada data

    // init get data
    transactions.getcars($scope.main.page, $scope.main.term)
        .success(function (data) {

            //Change Loading status
            $scope.setLoader(false);

            // result data
            $scope.input = data.data;

            // set the current page
            $scope.current_page = data.current_page;

            // set the last page
            $scope.last_page = data.last_page;

            // set the data from
            $scope.from = data.from;

            // set the data until to
            $scope.to = data.to;

            // set the total result data
            $scope.total = data.total;
        })
        .error(function (data, status) {
            // unauthorized
            if (status === 401) {
                //redirect to login
                $scope.redirect();
            }
            console.log(data);
        });

    // get data
    $scope.getData = function () {

        //Start loading
        $scope.setLoader(true);

        transactions.getcars($scope.main.page, $scope.main.term)
            .success(function (data) {

                //Stop loading
                $scope.setLoader(false);

                // result data
                $scope.input = data.data;

                // set the current page
                $scope.current_page = data.current_page;

                // set the last page
                $scope.last_page = data.last_page;

                // set the data from
                $scope.from = data.from;

                // set the data until to
                $scope.to = data.to;

                // set the total result data
                $scope.total = data.total;
            })
            .error(function (data, status) {
                // unauthorized
                if (status === 401) {
                    //redirect to login
                    $scope.redirect();
                }
                console.log(data);
            });
    };

    // Navigasi halaman terakhir
    $scope.lastPage = function () {
        //Disable All Controller
        $scope.main.page = $scope.last_page;
        $scope.getData();
    };

    // Navigasi halaman selanjutnya
    $scope.nextPage = function () {
        // jika page = 1 < halaman terakhir
        if ($scope.main.page < $scope.last_page) {
            // halaman saat ini ditambah increment++
            $scope.main.page++
        }
        // panggil ajax data
        $scope.getData();
    };

    // Navigasi halaman sebelumnya
    $scope.previousPage = function () {
        //Disable All Controller

        // jika page = 1 > 1
        if ($scope.main.page > 1) {
            // page dikurangi decrement —
            $scope.main.page--
        }
        // panggil ajax data
        $scope.getData();
    };

    // Navigasi halaman pertama
    $scope.firstPage = function () {
        //Disable All Controller

        $scope.main.page = 1;

        $scope.getData()
    };


    //Close Dialog
    $scope.cancel = function () {
        $uibModalInstance.dismiss('cancel');
    }
}]);

app.controller('ModalMembers', ['$state', '$scope', 'transactions', '$uibModalInstance', '$stateParams', function ($state, $scope, transactions, $uibModalInstance, $stateParams) {
    $scope.main = {
        page: 1,
        term: ''
    };

    $scope.isLoading = true;
    $scope.isLoaded = false;

    $scope.setLoader = function (status) {
        if (status == true) {
            $scope.isLoading = true;
            $scope.isLoaded = false;
        } else {
            $scope.isLoading = false;
            $scope.isLoaded = true;
        }
    };
    //Set process status to false
    $scope.process = false;

    //Init Alert status
    $scope.alertset = {
        show: 'hide',
        class: 'green',

        msg: ''
    };

    $scope.setLoader(true);

    //Init input form variable
    $scope.input = '';

    //Init Alert status
    $scope.alertset = {
        show: 'hide',
        class: 'green',
        msg: ''
    };
    $scope.pilih = function (data) {

        $scope.selected = data;
        $uibModalInstance.close(data);

    };
    //Run Ajax yang langsung ada data
    //drop down edit yang ada data

    // init get data
    transactions.getdrivers($scope.main.page, $scope.main.term)
        .success(function (data) {

            //Change Loading status
            $scope.setLoader(false);

            // result data
            $scope.input = data.data;

            // set the current page
            $scope.current_page = data.current_page;

            // set the last page
            $scope.last_page = data.last_page;

            // set the data from
            $scope.from = data.from;

            // set the data until to
            $scope.to = data.to;

            // set the total result data
            $scope.total = data.total;
        })
        .error(function (data, status) {
            // unauthorized
            if (status === 401) {
                //redirect to login
                $scope.redirect();
            }
            console.log(data);
        });

    // get data
    $scope.getData = function () {

        //Start loading
        $scope.setLoader(true);

        transactions.getdrivers($scope.main.page, $scope.main.term)
            .success(function (data) {

                //Stop loading
                $scope.setLoader(false);

                // result data
                $scope.input = data.data;

                // set the current page
                $scope.current_page = data.current_page;

                // set the last page
                $scope.last_page = data.last_page;

                // set the data from
                $scope.from = data.from;

                // set the data until to
                $scope.to = data.to;

                // set the total result data
                $scope.total = data.total;
            })
            .error(function (data, status) {
                // unauthorized
                if (status === 401) {
                    //redirect to login
                    $scope.redirect();
                }
                console.log(data);
            });
    };

    // Navigasi halaman terakhir
    $scope.lastPage = function () {
        //Disable All Controller
        $scope.main.page = $scope.last_page;
        $scope.getData();
    };

    // Navigasi halaman selanjutnya
    $scope.nextPage = function () {
        // jika page = 1 < halaman terakhir
        if ($scope.main.page < $scope.last_page) {
            // halaman saat ini ditambah increment++
            $scope.main.page++
        }
        // panggil ajax data
        $scope.getData();
    };

    // Navigasi halaman sebelumnya
    $scope.previousPage = function () {
        //Disable All Controller

        // jika page = 1 > 1
        if ($scope.main.page > 1) {
            // page dikurangi decrement —
            $scope.main.page--
        }
        // panggil ajax data
        $scope.getData();
    };

    // Navigasi halaman pertama
    $scope.firstPage = function () {
        //Disable All Controller

        $scope.main.page = 1;

        $scope.getData()
    };


    //Close Dialog
    $scope.cancel = function () {
        $uibModalInstance.dismiss('cancel');
    }
}]);

app.controller('ModalMembers', ['$state', '$scope', 'transactions', '$uibModalInstance', '$stateParams', function ($state, $scope, transactions, $uibModalInstance, $stateParams) {
    $scope.main = {
        page: 1,
        term: ''
    };

    $scope.isLoading = true;
    $scope.isLoaded = false;

    $scope.setLoader = function (status) {
        if (status == true) {
            $scope.isLoading = true;
            $scope.isLoaded = false;
        } else {
            $scope.isLoading = false;
            $scope.isLoaded = true;
        }
    };
    //Set process status to false
    $scope.process = false;

    //Init Alert status
    $scope.alertset = {
        show: 'hide',
        class: 'green',

        msg: ''
    };

    $scope.setLoader(true);

    //Init input form variable
    $scope.input = '';

    //Init Alert status
    $scope.alertset = {
        show: 'hide',
        class: 'green',
        msg: ''
    };
    $scope.pilih = function (data) {

        $scope.selected = data;
        $uibModalInstance.close(data);

    };
    //Run Ajax yang langsung ada data
    //drop down edit yang ada data

    // init get data
    transactions.getusers($scope.main.page, $scope.main.term)
        .success(function (data) {

            //Change Loading status
            $scope.setLoader(false);

            // result data
            $scope.input = data.data;

            // set the current page
            $scope.current_page = data.current_page;

            // set the last page
            $scope.last_page = data.last_page;

            // set the data from
            $scope.from = data.from;

            // set the data until to
            $scope.to = data.to;

            // set the total result data
            $scope.total = data.total;
        })
        .error(function (data, status) {
            // unauthorized
            if (status === 401) {
                //redirect to login
                $scope.redirect();
            }
            console.log(data);
        });

    // get data
    $scope.getData = function () {

        //Start loading
        $scope.setLoader(true);

        transactions.getusers($scope.main.page, $scope.main.term)
            .success(function (data) {

                //Stop loading
                $scope.setLoader(false);

                // result data
                $scope.input = data.data;

                // set the current page
                $scope.current_page = data.current_page;

                // set the last page
                $scope.last_page = data.last_page;

                // set the data from
                $scope.from = data.from;

                // set the data until to
                $scope.to = data.to;

                // set the total result data
                $scope.total = data.total;
            })
            .error(function (data, status) {
                // unauthorized
                if (status === 401) {
                    //redirect to login
                    $scope.redirect();
                }
                console.log(data);
            });
    };

    // Navigasi halaman terakhir
    $scope.lastPage = function () {
        //Disable All Controller
        $scope.main.page = $scope.last_page;
        $scope.getData();
    };

    // Navigasi halaman selanjutnya
    $scope.nextPage = function () {
        // jika page = 1 < halaman terakhir
        if ($scope.main.page < $scope.last_page) {
            // halaman saat ini ditambah increment++
            $scope.main.page++
        }
        // panggil ajax data
        $scope.getData();
    };

    // Navigasi halaman sebelumnya
    $scope.previousPage = function () {
        //Disable All Controller

        // jika page = 1 > 1
        if ($scope.main.page > 1) {
            // page dikurangi decrement —
            $scope.main.page--
        }
        // panggil ajax data
        $scope.getData();
    };

    // Navigasi halaman pertama
    $scope.firstPage = function () {
        //Disable All Controller

        $scope.main.page = 1;

        $scope.getData()
    };


    //Close Dialog
    $scope.cancel = function () {
        $uibModalInstance.dismiss('cancel');
    }
}]);