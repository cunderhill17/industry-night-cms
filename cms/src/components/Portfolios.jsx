import { NavLink } from 'react-router-dom';

export default function Portfolios() {
    return (
        <section className="portfoliospage">
            <div className="title-banner">
                <h2>PORTFOLIO DIRECTORY</h2>
                <h3>STUDENT PORTFOLIO ENTRIES</h3>
            </div>

            <div className="search-con">
                <label>
                    <span className="visually-hidden">Search Portfolios</span>
                    <input type="search" placeholder="Search students, roles, websites..." name="searchPortfolios"/>
                </label>
                <NavLink to="/create-portfolio">Add Portfolio</NavLink>
            </div>
            
            <section className="filter-con">
                <h4 className="visually-hidden">Buttons to filter portfolios</h4>
                <button>All</button>
                <button>Unarchived</button>
                <button>Archived</button>
            </section>

            <section className="portfolio-con">
                <h4 className="visually-hidden">Student Portfolios</h4>

                <SinglePortfolio />
                <SinglePortfolio />
                <SinglePortfolio />
            </section>

        </section>
    )
}

function SinglePortfolio() {
    return (
        <article className="student-portfolio">
            <div className="img-placeholder">
                <p>IMG</p>
            </div>
            <div className="portfolio-details">
                <h5>Liam Anderson</h5>
                <div>
                    <span>Roles: UI Designer </span>
                    <span>Website: landerson.com</span>
                </div>
            </div>
            <button>Select</button>
        </article>
    )
}