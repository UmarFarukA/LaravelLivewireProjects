import { Link } from "@inertiajs/react";

function Pagination({ paginator }) {
    const renderLabel = (label) => {
        if (label === "&laquo; Previous") return "«";
        if (label === "Next &raquo;") return "»";
        return label;
    };
    return (
        <>
            <div className="flex justify-center mt-6">
                <ul className="flex space-x-2">
                    {paginator.links.map((link) =>
                        link.url ? (
                            <Link
                                key={link.label}
                                href={link.url}
                                className={
                                    link.active
                                        ? "bg-green-700 text-white px-3 py-1 rounded"
                                        : "text-green-700 hover:bg-gray-200 px-3 py-1 rounded"
                                }
                            >
                                {renderLabel(link.label)}
                            </Link>
                        ) : (
                            <span
                                key={`${link.label}-disabled`}
                                className="px-3 py-1 text-gray-500"
                            >
                                {renderLabel(link.label)}
                            </span>
                        ),
                    )}
                </ul>
            </div>
        </>
    );
}

export default Pagination;
