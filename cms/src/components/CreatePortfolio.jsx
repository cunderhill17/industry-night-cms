import { NavLink } from 'react-router-dom';

export default function CreatePortfolio() {
    return (
        <section className="creationpage">
            <div className="title-banner">
                <NavLink className="backlink" to="/portfolios">&larr; Back</NavLink>
                <h2>CREATE PORTFOLIO</h2>
                <h3>STUDENT PORTFOLIO ENTRY</h3>
            </div>

            <label>
                <span>Name</span>
                <input type="text" />
            </label>

            <label>
                <span>Role</span>
                <input type="text" />
            </label>

            <label>
                <span>Website URL</span>
                <input type="text" />
            </label>

            <label>
                <span>Profile Image</span>
                <input type="file" />
            </label>

            <div className="btn-con">
                <button>Save</button>
                <button>Publish</button>
                <button>Cancel</button>
            </div>
        </section>
    )
}