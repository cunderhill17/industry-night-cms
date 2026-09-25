import { NavLink } from "react-router-dom";

export default function Header() {
    return (
        <header className="col-span-full md:col-span-3 lg:col-span-3">
            <nav>
                <ul>
                    <li>
                        <NavLink to="/">Home</NavLink>
                    </li>
                    <li>
                        <NavLink to="/">Portfolios</NavLink>
                    </li>
                    <li>
                        <NavLink to="/">Projects</NavLink>
                    </li>
                    <li>
                        <NavLink to="/">Settings</NavLink>
                    </li>
                </ul>
            </nav>
        </header>
    )
}