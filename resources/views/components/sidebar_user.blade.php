<div
    class="bg-dark col-xl-2 col-2 col-sm-4 col-md-3 vh-100 sidebar d-flex flex-column justify-content-between p-0 p-sm-2 z-2">
    <div class="bg-dark p-0 bg-danger mt-2">
        <div class="d-flex align-items-center justify-content-start border-bottom">
            <img class="object-fit-cover p-1" src="{{ asset('icons/white_wallet.svg') }}"><span
                class="fs-6 d-none d-sm-inline">
                <h6 class="text-light mb-4 mt-4">My Balance : <span class="text-info">{{ auth()->user()->balance }}</span></h6>
            </span>
        </div>
        <div class="d-flex text-decoration-none mt-3 align-items-center text-white">
            <span class="fs-5 d-none d-sm-inline">SideMenu</span>
        </div>
        <ul class="nav nav-pills flex-column mt-2">
            <li class="nav-item my-2">
                <a href="{{ route('getDashboard') }}" class="nav-link text-white d-flex gap-2">
                    <img class="icon-sizing object-fit-cover p-1"
                        src="{{ asset('icons/rectangle-list-solid.svg') }}"><span
                        class="fs-6 d-none d-sm-inline">Dashboard</span>
                </a>
            </li>
            <li class="nav-item my-2">
                <a href="{{ route('UserAllMovies') }}" class="nav-link text-white d-flex gap-2">
                    <img class="icon-sizing object-fit-cover p-1" src="{{ asset('icons/ticket-solid.svg') }}"><span
                        class="fs-6 d-none d-sm-inline">Order
                        Ticket</span>
                </a>
            </li>
            <li class="nav-item my-2">
                <a href="{{ route('getOrderHist') }}" class="nav-link text-white d-flex gap-2">
                    <img class="icon-sizing object-fit-cover p-1" src="{{ asset('icons/ticket-solid.svg') }}"><span
                        class="fs-6 d-none d-sm-inline">Ticket Order History</span>
                </a>
            </li>
            <li class="nav-item my-2">
                <a href="{{ route('getUserTopUp') }}" class="nav-link text-white d-flex gap-2">
                    <img class="icon-sizing object-fit-cover p-1"
                        src="{{ asset('icons/money-check-dollar-solid.svg') }}"><span
                        class="fs-6 d-none d-sm-inline">Top Up</span>
                </a>
            </li>
            <li class="nav-item my-2">
                <a href="{{ route('getUserWithdrawal') }}" class="nav-link text-white d-flex gap-2">
                    <img class="icon-sizing object-fit-cover p-1"
                        src="{{ asset('icons/money-check-dollar-solid.svg') }}"><span
                        class="fs-6 d-none d-sm-inline">Withdrawal</span>
                </a>
            </li>
            <li class="nav-item my-2">
                <a href="{{ route('getUserBalance', ['id' => auth()->user()->id]) }}"
                    class="nav-link text-white d-flex gap-2">
                    <img class="icon-sizing object-fit-cover p-1"
                        src="{{ asset('icons/sack-dollar-solid.svg') }}"><span class="fs-6 d-none d-sm-inline">Check
                        Balance</span>
                </a>
            </li>
            <li class="nav-item my-2">
                <a href="{{ route('Logout') }}" class="nav-link text-white d-flex gap-2">
                    <img class="icon-sizing object-fit-cover p-1"
                        src="{{ asset('icons/right-from-bracket-solid.svg') }}"><span
                        class="fs-6 d-none d-sm-inline">Logout</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="dropdown open p-sm-2 p-1">
        <button class="bg-dark border-white px-2 d-flex justify-content-center align-items-center border-none text-white" type="button" id="triggerId"
            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class=" object-fit-cover p-1" src="{{ asset('icons/Account_white.svg') }}"
                alt=""><span class="ms-2 d-none d-sm-inline">{{ auth()->user()->username }}</span>
        </button>
{{--         <div class="dropdown-menu" aria-labelledby="triggerId">
            <a class="dropdown-item" href="{{ route('Logout') }}">Logout</a>
        </div> --}}
    </div>
</div>
