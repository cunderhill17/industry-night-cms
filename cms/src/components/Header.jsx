import { NavLink } from "react-router-dom";
import EditIcon from "./IconComponents/EditIcon";
import HomeIcon from "./IconComponents/HomeIcon";
import PeopleIcon from "./IconComponents/PeopleIcon";
import SettingsIcon from "./IconComponents/SettingsIcon";

export default function Header() {
    return (
        <header className="col-span-full md:col-span-3 lg:col-span-3">
            <h1>IMD CMS <br/> <span>FACULTY BACKEND</span></h1>

            <nav>
                <ul>
                    <li>
                        <NavLink to="/">
                            <HomeIcon className={`headerIcon`} />
                            Home
                        </NavLink>
                    </li>
                    <li>
                        <NavLink to="/portfolios">
                            <PeopleIcon className={`headerIcon`} />
                            Portfolios
                        </NavLink>
                    </li>
                    <li>
                        <NavLink to="/projects">
                            <EditIcon className={`headerIcon`} />
                            Projects
                        </NavLink>
                    </li>
                    <li>
                        <NavLink to="/">
                            <SettingsIcon className={`headerIcon`} />
                            Settings
                        </NavLink>
                    </li>
                </ul>
            </nav>
        </header>
    )
}