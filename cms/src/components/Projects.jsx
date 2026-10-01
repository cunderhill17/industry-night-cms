import { NavLink } from "react-router-dom"

export default function Projects() {
    return (
        <section className="portfoliospage">
            <div className="title-banner">
                <h2>PROJECTS</h2>
                <h3>PROGRAM PROJECTS</h3>
            </div>

            <div className="search-con">
                <label>
                    <span className="visually-hidden">Search Portfolios</span>
                    <input type="search" placeholder="Search projects, courses, semesters..." name="searchPortfolios"/>
                </label>
                <NavLink to="/create-project">Add Project</NavLink>
            </div>
            
            <section className="filter-con">
                <h4 className="visually-hidden">Buttons to filter student Projects</h4>
                <button>All</button>
                <button>Unarchived</button>
                <button>Archived</button>
            </section>

            <section className="portfolio-con">
                <h4 className="visually-hidden">Student Projects</h4>

                <SingleProject />
            </section>

        </section>
    )
}

function SingleProject() {
    return (
        <article className="student-portfolio">
            <div className="img-placeholder">
                <p>IMG</p>
            </div>
            <div className="portfolio-details">
                <h5>Quantum Mechanics Visualizer</h5>
                <div>
                    <span>Course: Web Development</span>
                    <span>Semester: Fall</span>
                </div>
            </div>
            <button>Select</button>
        </article>
    )
}