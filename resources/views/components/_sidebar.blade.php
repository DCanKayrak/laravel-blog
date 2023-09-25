<aside id='sidebar' className=''>
    <div className='sidebar-container bg-dark px-3'>
        <a class="sidebar-title" href="/"><i class="fa-solid fa-earth-europe"></i> TransGlobal</a>
        <div className='sidebar-section'>
            <h5 className='mt-3 sidebar-section-title'><i class="fa-solid fa-users"></i> Müşteri İşlemleri</h5>
            <div className='horizontal-line'></div>
            <ul>
                <li className='sidebar-links'>
                    <a data-bs-toggle="collapse" href="#userDetails">
                        <i class="fa-solid fa-user"></i>
                        Kullanıcı İşlemleri <i class="fa-solid fa-angles-down"></i>
                    </a>

                    <ul class="collapse soft" id="userDetails">
                        <li><a href='/control-panel/account-details' className='sidebar-nested-link'><i class="fa-solid fa-chevron-right sidebar-nested-icon"></i> Hesap Ayrıntıları</a></li>
                    </ul>
                </li>

                <li className='sidebar-links'>
                    <a data-bs-toggle="collapse" href="#orderDetails">
                        <i class="fa-solid fa-boxes-stacked"></i>
                        Teslimat İşlemleri <i class="fa-solid fa-angles-down"></i>
                    </a>

                    <ul class="collapse soft" id="orderDetails">
                        <li><a href='/control-panel/order-request' className='sidebar-nested-link'><i class="fa-solid fa-chevron-right sidebar-nested-icon"></i> Teslimat Oluştur</a></li>
                        <li><a href='/control-panel/order-list' className='sidebar-nested-link'><i class="fa-solid fa-chevron-right sidebar-nested-icon"></i> Geçmiş Teslimatlarım</a></li>
                    </ul>
                </li>

                <li className='sidebar-links'>
                    <a data-bs-toggle="collapse" href="#messageDetails">
                        <i class="fa-solid fa-message"></i>
                        Mesaj Gönder <i class="fa-solid fa-angles-down"></i>
                    </a>

                    <ul class="collapse soft" id="messageDetails">
                        <li><a href='/control-panel/messages' className='sidebar-nested-link'><i class="fa-solid fa-chevron-right sidebar-nested-icon"></i> Mesajlar</a></li>
                        <li><a href='/control-panel/send-message' className='sidebar-nested-link'><i class="fa-solid fa-chevron-right sidebar-nested-icon"></i> Mesaj Oluştur</a></li>
                    </ul>
                </li>

                <li className='sidebar-links'>
                    <a data-bs-toggle="collapse" href="#rating">
                        <i class="fa-solid fa-star"></i>
                        Değerlendir <i class="fa-solid fa-angles-down"></i>
                    </a>

                    <ul class="collapse soft" id="rating">
                        <li><a href='/control-panel/rating' className='sidebar-nested-link'><i class="fa-solid fa-chevron-right sidebar-nested-icon"></i> Oy Ver!</a></li>
                    </ul>
                </li>
            </ul>
            <h5 className='mt-3 sidebar-section-title'><i class="fa-solid fa-building"></i> Kurumsal İşlemler</h5>
            <div className='horizontal-line'></div>

            <ul>
                <li className='sidebar-links'>
                    <a data-bs-toggle="collapse" href="#companyDetails">
                        <i class="fa-solid fa-user"></i>
                        Şirket İşlemleri <i class="fa-solid fa-angles-down"></i>
                    </a>

                    <ul class="collapse soft" id="companyDetails">
                        <li><a href='/control-panel/company' className='sidebar-nested-link'><i class="fa-solid fa-chevron-right sidebar-nested-icon"></i> Şirket Bilgileri</a></li>
                        <li><a href='/control-panel/company/company-list' className='sidebar-nested-link'><i class="fa-solid fa-chevron-right sidebar-nested-icon"></i> Şirket Listesi</a></li>
                    </ul>
                </li>

                <li className='sidebar-links'>
                    <a data-bs-toggle="collapse" href="#employeeDetails">
                        <i class="fa-solid fa-boxes-stacked"></i>
                        Çalışan İşlemleri <i class="fa-solid fa-angles-down"></i>
                    </a>

                    <ul class="collapse soft" id="employeeDetails">
                        <li><a href='/control-panel/company/employee-list' className='sidebar-nested-link'><i class="fa-solid fa-chevron-right sidebar-nested-icon"></i> Çalışan Listesi</a></li>
                    </ul>
                </li>

                <li className='sidebar-links'>
                    <a data-bs-toggle="collapse" href="#carDetails">
                        <i class="fa-solid fa-truck"></i>
                        Araç İşlemleri <i class="fa-solid fa-angles-down"></i>
                    </a>

                    <ul class="collapse soft" id="carDetails">
                        <li><a href='/control-panel/company/truck-list' className='sidebar-nested-link'><i class="fa-solid fa-chevron-right sidebar-nested-icon"></i> Araç Listesi</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</aside>
