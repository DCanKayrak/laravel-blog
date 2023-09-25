<div>
    <header className='panel-header d-flex justify-content-between'>
        <div className='panel-start text-white px-3'><button type='button' className="dropdown-item btn-close-sidebar"><i class="fa-solid fa-bars fs-menu"></i></button></div>
        <div className="dropdown panel-end">
            <a href="#" className="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" className="rounded-circle" />
            </a>
            <ul className="dropdown-menu text-small dropdown-menu-end">
                <li><a className="dropdown-item" href="#">{localStorage.getItem('userEmail')}</a></li>
                <li><a className="dropdown-item" href="#">Settings</a></li>
                <li><a className="dropdown-item" href="#">Profile</a></li>
                <li><hr className="dropdown-divider" /></li>
                <li><a className="dropdown-item" onClick={() => handleLogout()}>Sign out</a></li>
            </ul>
        </div>
    </header>
</div>
