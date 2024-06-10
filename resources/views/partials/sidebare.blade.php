<div class="body">
        <!-- navbar start -->
        <nav class="side-bar">
            <div class="user-p">
                <img src="{{asset('image/TrainLine.png')}}" alt="User Image">
            </div>
            <ul>
                <li>
                    <a href="#">
                        <i class="Dashboard" aria-hidden="true"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('bookings.index')}}">
                        <i class="Booking" aria-hidden="true"></i>
                        <span>Booking</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('transactions.index')}}">
                        <i class="Transaction" aria-hidden="true"></i>
                        <span>Transaction</span>
                    </a>
                </li>
                <li>
                    <a href="Logout.php">
                        <i class="Logout" aria-hidden="true"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- navbar end -->