<div class="col-xl-3 col-lg-12 sideBarColumn" id="academySideMenu">
    <div class="card sidebar_Card">
        <div class="d-flex justify-content-end mb-2 closeBtn" id="closeAcademySideBtn">
            <div class="btn btn-light">
                <img src="/design/img/categoriesPage/close.svg" alt="inoura"/>
            </div>
        </div>
        <div class="img_Name_Wrapper">
            <img src="{{ $authUser->getAvatar(100) }}" class="card-img-top" alt="image"/>
            <div class="card-body name_Wrapper">
                <p class="card-title welcome_Text">Welcome Back</p>
                <h2 class="card-title name_Text">{{ $authUser->full_name }}</h2>
            </div>
        </div>
        <div class="list-group">
            <a href="{{ url('/academy/dashboard') }}" class="list-group-item list-group-item-action">
                <div class="list_Item_Flex">
                    <div class="list_Image">
                        <img src="/design/img/dashboard/layout-sidebar.svg" alt="dasboard"/>
                    </div>
                    <p>Dashboard</p>
                </div>
            </a>
            <a href="{{ url('/academy/dashboard/courses') }}" class="list-group-item list-group-item-action">
                <div class="list_Item_Flex">
                    <div class="list_Image">
                        <img src="/design/img/dashboard/mortarboard.svg" alt="dasboard"/>
                    </div>
                    <p>Courses</p>
                </div>
            </a>
            <a href="{{ url('/academy/dashboard/assignments') }}" class="list-group-item list-group-item-action">
                <div class="list_Item_Flex">
                    <div class="list_Image">
                        <img src="/design/img/dashboard/list-task.svg" alt="dasboard"/>
                    </div>
                    <p>Assignments</p>
                </div>
            </a>
            <a href="{{ url('/academy/dashboard/mentors') }}" class="list-group-item list-group-item-action">
                <div class="list_Item_Flex">
                    <div class="list_Image">
                        <img src="/design/img/dashboard/people.svg" alt="mentord"/>
                    </div>
                    <p>Mentors</p>
                </div>
            </a>
            <a href="{{ url('/design/messages') }}" class="list-group-item list-group-item-action">
                <div class="list_Item_Flex">
                    <div class="list_Image">
                        <img src="/design/img/dashboard/chat.svg" alt="dasboard"/>
                    </div>
                    <p>Messages</p>
                </div>
            </a>
            <a href="{{ url('/design/payment') }}" class="list-group-item list-group-item-action">
                <div class="list_Item_Flex">
                    <div class="list_Image">
                        <img src="/design/img/dashboard/credit-card.svg" alt="dasboard"/>
                    </div>
                    <p>Payments</p>
                </div>
            </a>
            <a href="{{ url('/academy/dashboard/settings') }}" class="list-group-item list-group-item-action">
                <div class="list_Item_Flex">
                    <div class="list_Image">
                        <img src="/design/img/dashboard/gear.svg" alt="dasboard"/>
                    </div>
                    <p>Settings</p>
                </div>
            </a>
        </div>
    </div>
</div>
