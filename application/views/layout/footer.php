            <!-- Footer -->
        </div>
            <footer class="sticky-footer bg-white">
                <div class="container my-auto align-left">
                    <div class="copyright text-center my-auto ">
                        <span>&copy; BP3M Politeknik Caltex Riau, 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Apakah anda ingin melakukan logout?</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Kembali</button>
                            <a class="btn btn-primary" href="<?= base_url('Auth/logout'); ?>">Logout</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap core JavaScript-->
            <script src="assets/vendor/jquery/jquery.min.js"></script>
            <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="assets/js/sb-admin-2.min.js"></script>
            <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
            <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
            <script src="assets/vendor/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="<?= base_url('assets/') ?>js/demo/datatables-demo.js"></script>
            </body>

            </html>